const key = "RGAPI-b358be7c-6071-48eb-8598-9387a2252aba";

const lolApi = {
  async searchUser(nick) {
    let urlUser = `https://br1.api.riotgames.com/lol/summoner/v4/summoners/by-name/${nick}?api_key=${key}`;

    return await fetch(urlUser)
      .then(res => {
        return res.json();
      }).then(data => {
        return data;
      }).catch(err => {
        console.log("ERRO: " + err);
      });
  },

  async searchRankUser(id) {
    let urlUser = `https://br1.api.riotgames.com/lol/league/v4/entries/by-summoner/${id}?api_key=${key}`;

    return await fetch(urlUser)
      .then(res => {
        return res.json();
      }).then(data => {
        if(!data){
          return "";
        }
        return data;
      }).catch(err => {
        console.log("ERRO: " + err);
      });
  }
}


module.exports = lolApi