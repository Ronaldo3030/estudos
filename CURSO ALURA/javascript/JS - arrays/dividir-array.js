const alunos = [
  "João",
  "Juliana",
  "Ana",
  "Caio",
  "Lara",
  "Marjorie",
  "Guilherme",
  "Aline",
  "Fabiana",
  "Andre",
  "Carlos",
  "Paulo",
  "Bia",
  "Vivian",
  "Isabela",
  "Vinícius",
  "Renan",
  "Renata",
  "Daisy",
  "Camilo",
];

// "SLICE FATIA"
// SLICE CORTA O ARRAY COMEÇANDO DA PRIMEIRA POSIÇÃO PASSADA NO METODO ATÉ A 2
const alunos1 = alunos.slice(0, alunos.length/2);
// SE NÃO PASSAR O 2 VALOR NO MÉTODO, ELE CORTA ATÉ O ULTIMO VALOR
const alunos2 = alunos.slice(alunos.length/2)

console.log(alunos)
console.log(alunos1)
console.log(alunos2)