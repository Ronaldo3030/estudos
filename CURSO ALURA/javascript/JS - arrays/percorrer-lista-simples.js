const listaDeAlunosEMedias = [["João", "Juliana", "Ana", "Caio"], [10, 8, 7.5, 9]];

function showNameAndNote(aluno){
  if(listaDeAlunosEMedias[0].includes(aluno)){
    const [alunos, medias] = listaDeAlunosEMedias;

    console.log(`${aluno} está cadastrado!`);

    // RETORNA O INDICE DO ALUNO NO ARRAY PASSADO
    const indice = alunos.indexOf(aluno);

    const mediaDoAluno = medias[indice]
    console.log("E a nota é de: "+mediaDoAluno);
  }else{
    console.log("Aluno não cadastrado!");
  }
}

showNameAndNote("Ana")