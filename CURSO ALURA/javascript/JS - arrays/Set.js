const nomes = ["Ana", "Clara", "Maria", "Maria", "João", "João", "João"];

// REMOVE ELEMENTOS DUPLICADOS
const meuSet = new Set(nomes);

const nomesComSet = [...meuSet];

console.log(nomesComSet);