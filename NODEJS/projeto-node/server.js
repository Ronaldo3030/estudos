const app = require('./app');
const mongoose = require('mongoose');

// VARIAVEIS DE AMBIENTE
require('dotenv').config({path:'variables.env'});

// Conexão ao BD
mongoose.connect(process.env.DATABASE);
mongoose.Promise = global.Promise;
mongoose.connection.on('error', (error) => {
    console.error("ERRO: "+error.message);
});

app.set('port', process.env.PORT || 7777);

const server = app.listen(app.get('port'), () => {
    console.log("Servidor rodando na porta: "+server.address().port);
});
