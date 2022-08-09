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

o1=person()
o2=student()
o3=los()

print(isinstance(o1, person))
print(isinstance(o1, student))
print(isinstance(o1, los))
print(isinstance(o2, los))
print(isinstance(o2, person))
print(isinstance(o2, student))
print(isinstance(o3, person))
print(isinstance(o3, student))
print(isinstance(o3, los))

print("\n\n\n\n")
print(issubclass(student, person))
print(issubclass(student, los))
print(issubclass(person, student))
print(issubclass(person, los))
print(issubclass(los, person))
print(issubclass(los, student))

