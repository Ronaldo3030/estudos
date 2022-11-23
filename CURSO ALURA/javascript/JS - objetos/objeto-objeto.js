const cliente = {
  nome: "João",
  idade: 24,
  email: "joao@firma.com",
  telefone: [
    "3199999999",
    "3299999999"
  ]
};

cliente.endereco = {
  rua: "Rua Jose Costa Amber",
  numero: 13,
  apartamento: false,
  complemento: false
};

// PODE SE USAR . OU []
console.log(cliente);
console.log(cliente["endereco"]);