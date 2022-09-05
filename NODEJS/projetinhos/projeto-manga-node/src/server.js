require('dotenv').config();
const express = require('express');
const cors = require('cors');
const mongoose = require('mongoose');

const routes = require('./routes');

mongoose.connect(process.env.DATABASE, {
    useNewUrlParser: true,
    useUnifiedTopology: true
});
mongoose.Promise = global.Promise;
mongoose.connection.on('error', error => {
    console.log("Erro: " + error.message);
});

const app = express();

app.use(cors());
app.use(express.json());

app.use('/', routes);

app.listen(process.env.PORT, () => {
    console.log("Servidor rodando na porta: " + process.env.PORT);
});