const express = require('express');

// rotas
const router = express.Router();
router.get('/', (req, res) => {
    
    // GET: req.query
    // POST: req.body
    // PARAMETROS URL: req.params

    // ENVIAR PARAMETROS
    // SEND
    // JSON

    res.json(req.query);
});

router.get('/posts/:slug', (req, res) => {
    let slug = req.params.slug;
    res.send("Slug do post: " + slug);
});

router.get('/sobre', (req, res) => {
    res.send('Página sobre');
});

module.exports = router;