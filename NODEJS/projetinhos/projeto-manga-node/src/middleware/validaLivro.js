const { livros } = require('../controllers/LivroControllers');
const { generos } = require('../controllers/GeneroControllers');

module.exports = {
    findByIdParams: async (req, res, next) => {
        const { id } = req.params;

        const livroExiste = livros.find(livro => livro.id === id);

        if (!livroExiste) {
            return res.status(400).json({ error: "Esse livro não existe!" });
        }

        req.livro = livroExiste;
        next();
    },
    findByNameBody: async (req, res, next) => {
        const { nome } = req.body;

        const livroExiste = livros.find(livro => livro.nome === nome);

        if (livroExiste) {
            return res.status(401).json({ error: "Esse livro já existe!" });
        }

        req.livro = livroExiste;
        next();
    },
    findByNameParams: async (req, res, next) => {
        const { nome } = req.params;

        const livroExiste = livros.find(livro => livro.nome === nome);

        if (!livroExiste) {
            return res.status(400).json({ error: "Esse livro não existe!" });
        }

        req.livro = livroExiste;
        next();
    },
    findByGenero: async (req, res, next) => {
        const { genero } = req.body;
        if(genero){
            const generoExiste = generos.find(search_genero => search_genero.id === genero);
            if (!generoExiste) {
                return res.status(402).json({ error: "Gênero inexistente!" });
            }
    
            req.genero = generoExiste.id;
            next();
        }
        next();
    },
    validaBody: async (req, res, next) => {
        const data = req.body;
        const dataExiste = Object.keys(data);
        if(dataExiste.length <= 0){
            return res.status(400).json({error: "Dados invalidos!"});
        }
        next();
    }
}