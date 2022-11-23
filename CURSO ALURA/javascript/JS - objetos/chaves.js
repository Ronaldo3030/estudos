const cliente = {
  nome: "João",
  idade: 24,
  email: "joao@firma.com",
  telefone: ["3199999999", "3299999999"],
};

// cliente.enderecos = [
//   {
//     rua: "Rua Jose Costa Amber",
//     numero: 13,
//     apartamento: false,
//     complemento: false,
//   },
// ];

const chavesDoCliente = Object.keys(cliente);

console.log(chavesDoCliente);

if(!chavesDoCliente.includes("enderecos")){
  console.error("O cliente precisa ter um endereço!");
}