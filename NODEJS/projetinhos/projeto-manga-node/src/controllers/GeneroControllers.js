const { v4: uuidv4 } = require('uuid');
const generos = [];

module.exports = {
    add: async (req, res) => {
        const { nome } = req.body;
        if (!nome) {
            return res.stuts(400).json({ error: "Informe algum nome!" });
        }

        const genero = {
            id: uuidv4(),
            nome
        }

        generos.push(genero);

        return res.status(201).send();
    },
    getAll: async (req, res) => {
        const existeGeneros = generos.some(item => item);

        if (!existeGeneros) {
            return res.status(400).json({ error: "Não existe nenhum gênero!" });
        }

        return res.json(generos);
    },
    get: async (req, res) => {
        const { genero } = req;

        return res.json(genero);
    },
    put: async (req, res) => {
        const { genero } = req;

        const { nome } = req.body;

        genero.nome = nome;
        return res.json(genero);
    },
    delete: async (req, res) => {
        const { genero } = req;

        generos.splice(genero, 1);

        return res.status(204).send();
    },
    generos
}