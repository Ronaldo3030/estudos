const alunos = ["Ana", "Marcos", "Maria", "Mauro"];
const medias = [7, 4.5, 8, 7.5];

// alunos.forEach((aluno, indice) => {
//   medias[indice] >= 7 ? console.log(`${aluno} passou com a média de ${medias[indice]}`) : console.log(`${aluno} reprovado!`);
// });

// RETORNA O VALOR DO ARRAY QUE ESTÁ SENDO FILTRADO SE FOR TRUE
const reprovados = alunos.filter((aluno, indice) => {
  return medias[indice] < 7;
});

console.log(reprovados);