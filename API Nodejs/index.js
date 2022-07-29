const express = require('express');
const server = express();
const bot = require('./jogo');

const port = process.env.PORT || 3000;

server.get('/', async(req, res) => {
    const response = await bot();
    res.send(response);
})

server.listen(port, () => {
    console.log("Servidor funcionando!");
})