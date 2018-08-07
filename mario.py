class Mario:
    def move(self):
        print("i am moving")
class Shroom():
    def eatshroom(self):
        print("now i am moving")
class Bigmario(Mario,Shroom):
    pass
bm = Bigmario()
bm.move()
bm.eatshroom()
