import User from "./User.js";

export default class Docente extends User {
  constructor(nome, email, nascimento, role = "docente", ativo = 1){
    super(nome, email, nascimento, role , ativo);
  }

  aprovarEstudante(estudante, curso){
    return `O aluno ${estudante} foi aprovado no curso de ${curso}!`;
  }
}