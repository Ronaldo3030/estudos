import scrapy

class futebolSpider(scrapy.Spider):
    name = 'futebol'
    start_urls = ['https://fscore.com.br/']

    def parse(self, response):
        for time_casa in response.css('.host-name'):
            yield{
                'time_casa': response.css('.host-name::text'),
                'time_fora': response.css('.guest-name::text'),
                'resultado': response.css('.color-red::text'),
            }
