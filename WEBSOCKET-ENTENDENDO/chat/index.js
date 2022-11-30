require("dotenv").config();
const express = require("express");
const app = express();
const port = process.env.PORT;
const http = require("http");
const server = http.createServer(app);
const { Server } = require("socket.io");
const io = new Server(server);

app.use(express.json());

app.get("/", (req, res) => {
  res.sendFile(__dirname + "/view/index.html");
});

let nameUser;

app.get("/chat", (req, res) => {
  const { name } = req.query;
  nameUser = name;
  if(nameUser == ""){
    console.log("Nenhum usuário conectado, por favor tente novamente!");
    res.sendFile(__dirname + "/view/index.html");
  }
  res.sendFile(__dirname + "/view/chat.html");
});

io.on("connection", (socket) => {
  let user = {
    name: nameUser,
    id: socket.id
  }
  if(!user.name || !user.id){
    return;
  }
  io.emit('name', user.name);
  console.log(`Usuário ${user.name} do id: ${user.id} se conectou.`);
});

server.listen(port, () => {
  console.log("Server rodando na porta " + port);
});
