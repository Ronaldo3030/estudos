import User from "./User.js";

export default class Admin extends User {
  constructor(nome, email, nascimento, role = 'admin', ativo = true) {
    super(nome, email, nascimento, role, ativo);
    this.cursosCriados = [];
  }

  criarCurso(nomeDoCurso, vagas) {
    this.cursosCriados.push({
      nomeDoCurso,
      vagas
    });
    return `Curso de ${nomeDoCurso} criado, com ${vagas} vagas.`;
  }
}