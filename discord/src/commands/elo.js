const lolApi = require("../api/lolApi.js");
async function elo(msg){
  let nick = msg.param.join('').trim().toLowerCase();

  let dataUser = await lolApi.searchUser(nick);

  let rankUser = await lolApi.searchRankUser(dataUser.id);

  // console.log(rankUser);

  if(!rankUser){
    return;
  }

  rankUser = rankUser[0];

  return rankUser;
}

module.exports = elo;