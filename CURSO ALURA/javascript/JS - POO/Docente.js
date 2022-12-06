import User from "./User.js";

class Docente extends User {
  constructor(nome, email, nascimento, role = "docente", ativo = 1){
    super(nome, email, nascimento, role , ativo);
  }

  aprovarEstudante(estudante, curso){
    return `O aluno ${estudante} foi aprovado no curso de ${curso}!`;
  }
}

const novoDocente = new Docente("Renata", "r@a.com", "1990-03-11");

console.log(novoDocente)
console.log(novoDocente.aprovarEstudante("Oliver", "JS"));