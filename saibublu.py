print("hello sai! bublu")
fruits=['apple','banana','grapes']
for f in fruits:
    print(f)
    print(len(f))



for x in range(10,40,5):
    print(x)




for y in range(1,100):
    if(y%4 is 0):
        print(y)



def sai():
    print("hello sai")
sai()



def add(x):
    result=x+3
    print(result)
add(5)



def gender(sex= "unknown"):
    if sex is'm':
        print ("male")
    elif sex is'f':
        print ("female")
    else:
        print("unknown")
gender('m')
gender('f')
gender()




def sentence(name='sai',verb='is',work='eating'):
    print(name,verb,work)
sentence()
sentence(work='running')



def fun(*args):
    tot=0
    for x in args:
        tot=tot+x
    print(tot)
fun(3)
fun(4,5)
fun(4,8,2)




set={'sai','ramu','raju','soma'}
print(set)
if 'soma' in set:
    print("hi sonu")
else:
    print("oh no!")



dict={'sai': 'is intelligent','ramu':'is good','soumya':'is awesome'}
for k,v in dict.items():
    print(k,v)


'''
import bublu
bublu.fish()
'''

#downloading an image
import random
import urllib.request

def download_web_image(url):
 name = random.randrange(1,1000)
 full_name=str(name)+".jpg"
 urllib.request.urlretrieve(url,full_name)
#downloading image
download_web_image("https://in.images.search.yahoo.com/images/view;_ylt=AwrxhddmFmlbPRwA104O9olQ;_ylu=X3oDMTIyZzlzZzBpBHNlYwNzcgRzbGsDaW1nBG9pZANhOGM4YTc1NzlhYWFiOTBkODYzYzdlNDZhZmM1N2RiNgRncG9zAzcEaXQDYmluZw--?.origin=&back=https%3A%2F%2Fin.images.search.yahoo.com%2Fyhs%2Fsearch%3Fp%3Dbucky%2Broberts%26type%3D1101%26fr%3Dyhs-avast-securebrowser%26fr2%3Dpiv-web%26hsimp%3Dyhs-securebrowser%26hspart%3Davast%26tab%3Dorganic%26ri%3D7&w=1920&h=1080&imgurl=i.ytimg.com%2Fvi%2F_ocFxkcS46g%2Fmaxresdefault.jpg&rurl=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D_ocFxkcS46g&size=142.6KB&name=%3Cb%3EBucky+Roberts%3C%2Fb%3E+%2F+thenewboston+Update+-+200+Brand+New+Visual+Basic+...&p=bucky+roberts&oid=a8c8a7579aaab90d863c7e46afc57db6&fr2=piv-web&fr=yhs-avast-securebrowser&tt=%3Cb%3EBucky+Roberts%3C%2Fb%3E+%2F+thenewboston+Update+-+200+Brand+New+Visual+Basic+...&b=0&ni=21&no=7&ts=&tab=organic&sigr=11as8onkt&sigb=154h02gtl&sigi=11cn8cmc4&sigt=12bp1e0r2&sign=12bp1e0r2&.crumb=5ELE1L2tex7&fr=yhs-avast-securebrowser&fr2=piv-web&hsimp=yhs-securebrowser&hspart=avast&type=1101")



'''writing in the file
fw=open('sample.txt','w')
fw.write('writing the stuff in the file\n')
fw.write('i like bucky\n')
fw.close()

#reading in the file
fr=open('sample.txt','r')
text=fr.read()
print(text)
fr.close()



'''

'''
def trade_spider(max_pages):
    page = 1
    while page <= max_pages:
        url='https://buckysroom.org/trade/search.php?page='+str(page)
        source_code = requests.get(url)
        plain_text = source_code.text
        soup = beautifulsoup4(plain_text)
        for link in soup.findAll('a',{'class':'item_name'}):
            href = "https://buckysroom.org"+link.get('href')
            print(href)
        page += 1
trade_spider(1)
'''

'''
class Enemy:
    life = 3
    def attack(self):
        print("ouch")
        self.life -= 1
    def checkLife(self):
        if self.life <= 0:
            print("i am dead")
        else:
            print(str(self.life)+"life left")

enemy1 = Enemy()
enemy1.attack()
'''
'''
class Enemy:
    def _init_(self,x):
        self.energy = x
    def get_energy(self):
        print(self.energy)

jason = Enemy(5)
sandy = Enemy(18)

jason.get_energy()
sandy.get_energy()
'''
class Girl:

    gender = 'female'

    def __init__(self, name):
        self.name = name

r = Girl('rachl')
s = Girl('stancky')
print(r.gender)
print(s.gender)
print(r.name)
print(s.name)

























    



