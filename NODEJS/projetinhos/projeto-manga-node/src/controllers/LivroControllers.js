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
            status: true //status true, livro disponivel 
        }

        livros.push(livro);
        return res.status(201).send();
    },
    get: async (req, res) => {
        const { livro } = req;
        return res.json(livro);
    },
    livros
}