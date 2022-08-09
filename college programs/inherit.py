class person:
    __name="dhruv"
    def dis(self):
        print("hello,", self.__name,"from base class")

class student(person):
    id="1233435"
    def pos(self):
        print("hello,", self.__name,"from derieved class ")
class los(student):
    def display(self):
        print("this is the message from super-derieved class to ", self.__name, self.id)

i=person()
j=student()
k=los()
i.dis()
j.pos()
k.pos() #along with attribute we can also inherit different methods which are there in parent class from child class
k.display()