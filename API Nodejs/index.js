const express = require('express');
const server = express();
const bot = require('./jogo');
const botOntem = require('./jogo-ontem');
const botAgora = require('./jogo-online');
const botData = require('./jogo-data');

const port = process.env.PORT || 3000;

server.get('/', async(req, res) => {
    const response = await bot();
    res.send(response);
})

server.get('/ontem', async(req, res) => {
    const response = await botOntem();
    res.send(response);
})

server.get('/agora', async(req, res) => {
    const response = await botAgora();
    res.send(response);
})

server.get('/data/:data', async(req, res) => {
    const data = req.params.data;
    const response = await botData(data);
    res.send(response);
})

server.listen(port, () => {
    console.log("Servidor funcionando!");
})