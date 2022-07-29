const express = require('express');
const server = express();
const pup = require('puppeteer');

server.get('/get-jogos', (req, res) => {

    const url = 'https://fscore.com.br/';
    (async () => {
        const list = [];
        const browser = await pup.launch({ headless: true });
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

        await page.close();
        console.log('Finalizado!');
        return res.json({ jogos: list });
    })();
})

server.listen(3000, () => {
    console.log("Servidor funcionando!");
})