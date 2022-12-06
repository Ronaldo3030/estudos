const user = {
  nome: "Ronaldo",
  email: "sbplayyy@gmail.com",
  nascimento: "2000/03/01",
  role: "estudante",
  ativo: true,
  exibirInfos: function () {
    console.log(this.nome, this.email);
  }
}

const admin = {
  nome: "Mariana",
  email: "m@m.com",
  role: "admin",
  criarCurso() {
    console.log("curso criado!");
  }
}

// PASSA OS PARAMETROS DE ADMIN PRA USER
Object.setPrototypeOf(admin, user);

admin.criarCurso()
admin.exibirInfos()