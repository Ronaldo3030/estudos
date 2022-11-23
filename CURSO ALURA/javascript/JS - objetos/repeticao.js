const cliente = {
  nome: "João",
  idade: 24,
  email: "joao@firma.com",
  telefone: ["3199999999", "3299999999"],
};

cliente.enderecos = [
  {
    rua: "Rua Jose Costa Amber",
    numero: 13,
    apartamento: false,
    complemento: false,
  },
];

for(let chave in cliente){
  let tipo = typeof cliente[chave];
  if(tipo !== 'functon' && tipo !== 'object')
    console.log(`A chave ${chave} tem o valor: ${cliente[chave]}`);
  
}