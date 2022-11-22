const notas = [7, 7, 8, 9];

// JEITO PARA COPIAR ARRAY SEM LIGAR OS DOIS
const novasNotas = [...notas];

novasNotas.push(10);

console.log("Notas: " + novasNotas);
console.log("Notas: " + notas);
