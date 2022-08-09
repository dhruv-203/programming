class staff:
    def __init__(self, name, age):
        self.name=name
        self.age=age
class teacher(staff):
    def __init__(self, salary, department):
        name=input("ENTER NAME: ")
        age=input("ENTER AGE:")
        super().__init__(name, age)
        self.salary=salary
        self.department=department
    def display(self):
        print("NAME: ", self.name)
        print("AGE: ", self.age)
        print("SALARY: ", self.salary)
        print("DEPARTMENT: ", self.department)
sal=input("ENTER YOUR SALARY: ")
dept=input("ENTER YOUR DEPARTMENT: ")
obj=teacher(sal, dept)
obj.display()

        