const got = require('got');
const jsdom = require('jsdom');
const { JSDOM } = jsdom;
const meetupEventsUrl = 'https://www.placardefutebol.com.br/jogos-de-hoje'
got(meetupEventsUrl).then(res=>{
    const eventsPageDom = new JSDOM(res.body.toString()).window.document;
    const eventsParentsElements = eventsPageDom.querySelector(selectors, '.content');
})