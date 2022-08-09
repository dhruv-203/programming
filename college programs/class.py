""" class sample:
    x=2 #class variable
    def display(self,y):
        self.y=y
        
s1= sample()
s1.display(3)
print(s1.x, s1.y)
s2=sample()
s2.y=4
print(s2.x, s2.y) """


class student:
    std_id = 303
    def put(self):
        print("Hello,", self.std_id)
        
s = student()
print(s.std_id)
s.put()