const cliente = {
  nome: "João",
  idade: 24,
  email: "joao@firma.com",
  telefone: ["3199999999", "3299999999"],
  saldo: 200,
  efetuaPagamento: function (valor) {
    if (valor > this.saldo) {
      return console.log("Seu saldo é menor que o valor do pagamento!");
    }
    this.saldo -= valor;
    console.log("Pagamento efetuado com sucesso! Novo saldo: " + this.saldo);
  },
};

console.log(cliente.saldo);
cliente.efetuaPagamento(13);
console.log(cliente.saldo);
