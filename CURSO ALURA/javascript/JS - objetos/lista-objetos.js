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

cliente.enderecos.push({
  rua: "Rua Jesus Joaquim Bernardes",
  numero: 15,
  apartamento: true,
  complemento: "Perto do bar do didi",
});

const listaApenasApartamentos = cliente.enderecos.filter(
  (endereco) => endereco.apartamento === true
);

console.log(listaApenasApartamentos);