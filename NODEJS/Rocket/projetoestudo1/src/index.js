const express = require('express');
const { v4: uuidv4 } = require('uuid');

const app = express();

app.use(express.json());

app.get("/ping", (req, res) => {
    res.json({ "pong": true });
});



app.listen(3333, () => {
    console.log("Servidor rodando na porta 3333");
});