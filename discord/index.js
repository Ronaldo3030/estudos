const express = require("express");
const { Client } = require("discord.js");
const hundleCommands = require("./src/functions/handleCommands.js");

const token = "MTA0MzE5ODQ3NzQ3MzE2MTI3Nw.G8DbfP.O6rFL-vQsArUe0Ohf6Ir2p7iZn-ggAxDPT-j4o";

const app = express();

const bot = new Client();

bot.on("ready", () => {
  console.log("Ready");
});

bot.on("message", async (msg) => await hundleCommands(msg));

bot.login(token);

app.listen(8000, () => {
  console.log("Server ON!");
});