class person:
    def __init__(self, name):
        self.__name=name
    def display(self):
        print("my name is ", self.__name)
class nam(person):
    
    def __init__(self, surname, name):
        self.surname=surname
        super().__init__(name)
        super().display()
    def display(self):
        print("surname:", self.surname)

obj=nam("patel", "dhruv")
obj.display()