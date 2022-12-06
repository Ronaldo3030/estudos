import User from "./User.js";
import Docente from "./Docente.js";
import Admin from "./Admin.js";

const novoUser = new User("Ronaldo", "r@r.com", '2000-03-01');
console.log(novoUser.exibirInfos());
novoUser.nome = "noemee"
console.log(novoUser.nome);

// const novoAdmin = new Admin("Renata", "asd@gmail.com", "2001-03-20");
// console.log(novoAdmin.nome);