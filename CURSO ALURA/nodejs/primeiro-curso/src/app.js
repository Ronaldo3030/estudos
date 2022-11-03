import express from "express"

const app = express();

app.use(express.json());

const livros = [
  { id: 1, "titulo": "Senhor dos aneis" },
  { id: 2, "titulo": "O hobbit" }
];

app.get('/', (req, res) => {
  res.status(200).send("Curso de Node");
});

app.get('/livros', (req, res) => {
  res.status(200).json(livros);
});

app.get('/livros/:id', (req, res) => {
  let index = searchLivro(req.params.id);
  res.status(200).json(livros[index]);
});

app.post('/livros', (req, res) => {
  livros.push(req.body);
  res.status(201).send("Livro cadastrado com sucesso!");
})

app.put('/livros/:id', (req, res) => {
  let index = searchLivro(req.params.id);
  livros[index].titulo = req.body.titulo;
  res.status(200).json(livros);
});

app.delete('/livros/:id', (req, res) => {
  let {id} = req.params;
  let index = searchLivro(id);
  livros.splice(index, 1);
  res.send(`Livro ${id} removido com sucesso!`);
});

function searchLivro(id){
  return livros.findIndex(livro => livro.id == id);
}

export default app;