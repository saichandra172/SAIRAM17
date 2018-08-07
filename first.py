import threading
class Messenger(threading.Thread):
    def run(self):
        for _ in range(10):
            print(threading.currentThread().getName())
x = Messenger(name="send out messages")
y = Messenger(name="receive messages")
x.start()
y.start()
'''word frequency
import requests
from bs4 import BeautifulSoup
import operator

def start(url):
    word_list = []
    source_code = requests.get(url).text
    soup = BeautifulSoup(source_code)
    for post_text in soup.findAll('a',{'class':'index_singleListingTitles'}):
        content = post_text.string
        words = content.lower().split()
        for each_word in words:
            print(each_word)
            word_list.append(each_word)
start('https://buckysroom.org/tops.php?type=text&period-this.month')
'''

date,item,price = ['december 23, 2015','bread gloves',8.51]
print(name)








