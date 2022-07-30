const pup = require('puppeteer');

const url = 'https://fscore.com.br/yesterday';

// TIMES COM NOME - TÃO BUGANDO

const bot = async () => {
    const list = [];
    const browser = await pup.launch({
        headless: true,
        args: ['--no-sandbox', '--disable-setuid-sandbox']
    });
    const page = await browser.newPage();
    console.log("INICIADO!");

    await page.goto(url);
    console.log("Foi para url.");

    await page.waitForSelector('.index');

    const jogos = await page.$$eval('.match-grid-title', el => el.map(nome => nome.innerText));


    jogos.forEach(jogo => {
        const obj = {};
        let times = jogo.split('-');
        obj.time_casa = times[0];
        obj.time_fora = times[1];

        list.push(obj);
    });

    await browser.close();
    console.log("Trago todos")
    return list;
};

module.exports = bot;
