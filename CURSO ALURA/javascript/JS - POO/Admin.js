import User from "./User.js";

class Admin extends User {
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

const novoAdmin = new Admin("Ronei", "a@r.com", "2000-01-01");

console.log(novoAdmin);
console.log(novoAdmin.criarCurso("JS", 12));
console.log(novoAdmin.criarCurso("PHP", 30));
console.log(novoAdmin.criarCurso("HTML CSS", 120));
console.log(novoAdmin.cursosCriados);