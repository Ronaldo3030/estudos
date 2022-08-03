from encodings import utf_8
import requests
import re

url = 'https://www.placardefutebol.com.br/jogos-de-hoje'

r = requests.get(url)

html = r.text.encode('utf8')
print(html)

search = re.search(r'<h5 class=[\'"?]', html.decode("utf8"))