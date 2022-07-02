# B.Tech Computer Science and Engineering
# Patel Dhruv
# 202103103510445

class area:
    def   __init__(self,len=None, wid=None):
        self.len=len
        self.wid=wid
    def find_area(self):
        if self.len!=None and self.wid==None :
            print("Area of Square:",self.len**2)
        elif self.len!=None and self.wid!=None :
            print("Area of Rectangle: ",self.len*self.wid)

choice=input("Enter Square to get area of square OR Enter Rectangle to get the area of Rectangle:")
if choice=="Square":
    len=int(input("Enter the Side of Square: "))
    obj1=area(len)
    obj1.find_area()
elif choice=="Rectangle":
    len=int(input("Enter the length of Rectangle: "))
    wid=int(input("Enter the width of Rectangle: "))
    obj1=area(len,wid)
    obj1.find_area()