const rank = require("../commands/rank.js");
const elo = require("../commands/elo.js");

async function handleCommands(msg) {
  const prefix = ";";
  msg.param = msg.content.split(" ").splice(1);
  msg.comando = msg.content.split(" ")[0].replace(prefix, "");
  if (!msg.content.startsWith(prefix)) return;

  switch (msg.comando) {
    // case "rank":
    //   rank(msg);
    //   break;

    case "elo":
      let eloUser = await elo(msg);
      if (!eloUser) {
        msg.channel.send("Esse usuário não existe ou está sem rank.");
        return;
      }
      msg.channel.send(`O usuário ${eloUser.summonerName} atualmente está no elo: ${eloUser.tier} ${eloUser.rank}`);
      break;

    case "help":
      msg.channel.send(`Lista de comandos existentes:`);
      msg.channel.send(`* ;elo NickNoJogo = Para ver o elo do jogador que foi passado o nick`);
      break;

    default:
      console.log("Comando não existe");
      msg.channel.send(`Comando inexistente, digite ";help" (sem aspas) para ver a lista de comandos.`);
      break;
  }

}

module.exports = handleCommands;