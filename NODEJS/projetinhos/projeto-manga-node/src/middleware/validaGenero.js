const { generos } = require('../controllers/GeneroControllers');

module.exports = {
    findByNameBody: async (req, res, next) => {
        const { nome } = req.body;

        const generoExiste = generos.find(genero => genero.nome === nome);
        if (generoExiste) {
            return res.status(400).json({ error: "Este genêro já existe!" });
        }
        req.genero = generoExiste;
        next();
    },
    findByNameParams: async (req, res, next) => {
        const { nome } = req.params;

        const generoExiste = generos.find(genero => genero.nome === nome);
        if (!generoExiste) {
            return res.status(400).json({ error: "Este genêro não existe!" });
        }
        req.genero = generoExiste;
        next();
    }
}