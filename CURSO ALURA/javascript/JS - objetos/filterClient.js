const data = require('./clientes.json');

function filterClientsDontHaveComplement(clients){
  return clients.filter(client => {
    return (client.endereco.apartamento && !client.endereco.hasOwnProperty("complemento"));
  });
}

const clientsWithApartament = filterClientsDontHaveComplement(data);

console.log(clientsWithApartament);