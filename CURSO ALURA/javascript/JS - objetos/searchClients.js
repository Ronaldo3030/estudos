const data = require('./clientes.json');

function searchClient(list, key, value){
  return list.find((item) => item[key].includes(value));
}

const client = searchClient(data, "telefone", "94966883489");

console.log(client)