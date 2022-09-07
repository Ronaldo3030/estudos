const { v4: uuidv4 } = require('uuid');
const livros = [];

module.exports = {
    list: async (req, res) => {
        const existeLivro = livros.some(livro => livro);

        if (!existeLivro) {
            return res.status(400).json({ error: "Nenhum livro cadastrado!" });
        }

        return res.json(livros);
    },
    add: async (req, res) => {
        const { nome, autor, qtd_pagina } = req.body;
        const { genero } = req;

        const livro = {
            id: uuidv4(),
            nome,
            autor,
            qtd_pagina,
            genero,
            status: false //status false livro ainda n foi lido
        }

        livros.push(livro);
        return res.status(201).send();
    },
    get: async (req, res) => {
        const { livro } = req;
        return res.json(livro);
    },
    put: async (req, res) => {
        const { livro } = req;
        const { nome, autor, qtd_pagina, genero } = req.body;
        if (nome) {
            livro.nome = nome;
        }
        if (autor) {
            livro.autor = autor;
        }
        if (qtd_pagina) {
            livro.qtd_pagina = qtd_pagina;
        }
        if (genero) {
            livro.genero = genero;
        }

        return res.json(livro);
    },
    delete: async (req, res) => {
        const { livro } = req;
        livros.splice(livro, 1);
        return res.status(204).send();
    },
    undone: async (req, res) => {
        const {livro} = req;
        if(livro.status === false){
            return res.status(400).json({error: "Este livro ainda não foi lido!"});
        }
        livro.status = false;
        return res.status(203).send();
    },
    done: async (req, res) => {
        const {livro} = req;
        if(livro.status === true){
            return res.status(400).json({error: "Este livro já foi lido!"});
        }
        livro.status = true;
        return res.status(203).send();
    },
    livros
}