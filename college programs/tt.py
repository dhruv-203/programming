from random import choice


class base1:
    a=""
    def __init__(self, x, y):
        self.a=x
        self.b=y

class base2:
    c=""
    def __init__(self, x, y):
        self.c=x
        self.b=y
class base3:
    d=""
    def __init__(self, x, y):
        self.d=x
        self.b=y
    
class child(base1, base2, base3):
    def __init__(self, p, q, nam1, nam2,choice,nam3, nam4):
        self.po=p
        self.qo=q
        if choice==0:
            base1.__init__(self, nam1, nam2)
        elif choice==1:    
            base2.__init__(self, nam3, nam2)
        elif choice==2:
            base3.__init__(self, nam4, nam2)

for choice in range(3):
    if choice==0:
        onj=child("a", "e", "dhruv", "patel",0, "harsh", "amman")
        b1=onj.b
    elif choice==1:
        onj=child("a", "e", "dhruv", "gamit",1, "harsh", "amman" )
        b2=onj.b
    elif choice==2:
        onj=child("a", "e", "dhruv", "multani",2, "harsh", "ammar")
        b3=onj.b
print(onj.po, onj.qo, onj.a, b1, onj.c, onj.d, b2, b3)