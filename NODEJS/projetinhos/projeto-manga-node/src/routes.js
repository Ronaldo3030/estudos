const express = require('express');
const GeneroControllers = require('./controllers/GeneroControllers');
const LivroControllers = require('./controllers/LivroControllers');
const validaGenero = require('./middleware/validaGenero');
const validaLivro = require('./middleware/validaLivro');
const router = express.Router();

router.get('/ping', (req, res) => {
    return res.json({ pong: "true" });
});

router.get("/generos", GeneroControllers.list);
router.post("/generos", validaLivro.validaBody, validaGenero.findByNameBody, GeneroControllers.add);
router.get('/generos/:nome', validaGenero.findByNameParams, GeneroControllers.get);
router.put('/generos/:nome', validaLivro.validaBody, validaGenero.findByNameParams, GeneroControllers.put);
router.delete('/generos/:nome', validaGenero.findByNameParams, GeneroControllers.delete);

router.get('/livros', LivroControllers.list);
router.post('/livros', validaLivro.findByNameBody, validaLivro.findByGenero, LivroControllers.add);
router.get('/livros/:id', validaLivro.findByIdParams, LivroControllers.get);
router.put('/livros/:id', validaLivro.validaBody, validaLivro.findByIdParams, validaLivro.findByGenero, LivroControllers.put);
router.delete('/livros/:id', validaLivro.findByIdParams, LivroControllers.delete);

module.exports = router;