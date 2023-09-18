import requests
from bs4 import BeautifulSoup

url = 'https://www.bcv.org.ve/tasas-informativas-sistema-bancario'
response = requests.get(url)
soup = BeautifulSoup(response.text, 'html.parser')

dollar_div = soup.find('div', {'id': 'dolar'})
dollar_rate = dollar_div.find('strong').text.strip()

print(f'Tipo de cambio del USD: {dollar_rate}')