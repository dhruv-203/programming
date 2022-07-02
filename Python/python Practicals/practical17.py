# B.Tech Computer Science and Engineering
# Patel Dhruv
# 202103103510445

class personal_details:
    Name="Dhruv"
    Age=18
    Gender="Male"
    __AAdhar_no=6876845421

    def display(self):
        print("Name: "+ self.Name)
        print("Age:",self.Age)
        print("Gender:",self.Gender)
        print("Aadhhar Card Number:",self.__AAdhar_no)

obj=personal_details()
obj.display()
try: print(obj.__AAdhar_no)
except AttributeError:
    print("AAdhar_no is a private variable ")  