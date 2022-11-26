const dados = require("./cliente.json");

// console.log(dados);
// console.log(typeof dados);
// dados.nome = "TETE"
// console.log(dados);

const clienteEmString = JSON.stringify(dados);

console.log(clienteEmString);
console.log(clienteEmString.nome);

const clienteEmObjeto = JSON.parse(clienteEmString);

console.log(clienteEmObjeto);
console.log(typeof clienteEmObjeto);
console.log(clienteEmObjeto.nome);