const pup = require('puppeteer');

const url = 'https://fscore.com.br/';
const list = [];
let c = 0;
    (async () => {
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

        console.log(list);

        await page.waitForTimeout(3000);

        await page.close();
    })();