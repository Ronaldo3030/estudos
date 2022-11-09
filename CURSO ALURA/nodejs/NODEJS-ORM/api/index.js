import express from 'express';

const app = express();

app.use(express.json());

const port = 3000;

app.get('/ping', (req, res) => {
  res.status(200).send({ ping: "pong" });
});

app.listen(port, () => {
  console.log("Servidor rodando na porta: " + port);
});

export default app;