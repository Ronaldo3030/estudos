const salaJS = [7, 8, 8, 7, 10, 6.5, 4, 10, 7];
const salaJava = [6, 5, 8, 9, 5, 6];
const salaPython = [7, 3.5, 8, 9.5];

function calculaMedia(notaDaSala){
  // REDUCE TEM QUE SE PASSAR, ALGUM ACUMULADOR E O VALOR DO ARRAY
  // O VALOR A SE PASSAR NO FINAL DA FUNÇÃO É O VALOR INICIAL DESSE ACUMULADOR
  const somaDasNotas = notaDaSala.reduce((acumulador, nota) => {
    console.log(acumulador)
    return acumulador + nota;
  }, 0);

  console.log(somaDasNotas);
}

calculaMedia(salaJS);