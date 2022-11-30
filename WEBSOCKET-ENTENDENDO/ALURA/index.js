const express = require("express");
const app = express();

const http = require("http");
const server = http.createServer(app);
const { Server } = require("socket.io");
const io = new Server(server);

app.get("/", (req, res) => {
  res.sendFile(__dirname + "/index.html");
});

// metodos da biblioteca websocket
io.on("connection", (socket) => {
  console.log("Alguém se conectou com o id: " + socket.id);
});

function valueGenerator(){
  return (Math.random() * 100).toFixed(2);
}

setInterval(() => {
  io.emit('cotacao', valueGenerator());
}, 1000);

server.listen(3000, () => {
  console.log("Server rodando");
});