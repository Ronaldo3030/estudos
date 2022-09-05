const express = require('express');
const GeneroControllers = require('./controllers/GeneroControllers');
const validaGenero = require('./middleware/validaGenero');
const router = express.Router();

router.get('/ping', (req, res) => {
    return res.json({ pong: "true" });
});

router.get("/generos", GeneroControllers.getAll);
router.post("/generos/add", validaGenero.findByNameBody, GeneroControllers.add);
router.get('/generos/:nome', validaGenero.findByNameParams, GeneroControllers.get);
router.put('/generos/:nome', validaGenero.findByNameParams, GeneroControllers.put);
router.delete('/generos/:nome', validaGenero.findByNameParams, GeneroControllers.delete);

module.exports = router;