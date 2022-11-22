const notas = [10, 9, 8, 7, 6, 3, 1];

const novasNotas = notas.map(nota => {
  return nota + 1 > 10 ? 10 : nota + 1;
});

console.log(novasNotas);
