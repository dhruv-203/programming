# B.Tech Computer Science and Engineering
# Patel Dhruv
# 202103103510445

class C:
    def __init__(self, learnin, prof_nam):
        self.C_learning=learnin
        self.C_Name_Professor=prof_nam
class Python:
    def __init__(self, learnin, prof_nam):
        self.Py_learning=learnin
        self.Py_Name_Professor=prof_nam
class Web_Desinging:
    def __init__(self, learnin, prof_nam):
        self.Wd_learning=learnin
        self.Wd_Name_Professor=prof_nam

class student(C, Python, Web_Desinging):
    college_name="Asha M, Tarsadia Institute of Computer Science and technology"
    def __init__(self, st_name, enroll, course,c_prof, c_learnin, py_prof, py_learnin, wd_prof, wd_learnin ):
        self.std_name=st_name
        self.std_enrollment_no=enroll
        self.std_course=course
        C.__init__(self,c_learnin, c_prof)
        Python.__init__(self,py_learnin, py_prof)
        Web_Desinging.__init__(self,wd_learnin, wd_prof) 
    def display(self):
        print("-------------------------------------------------------------------------")
        print("|    "+self.college_name+"      |")
        print("-------------------------------------------------------------------------")
        print("Enrollment NO:", self.std_enrollment_no)
        print("Course Selected By Student:", self.std_course)
        print("\n")
        print("--------------------------------------------------------------------------------------------------------------\n")
        print(self.std_name ,"is learning C langauge taught by", self.C_Name_Professor )
        print("Topics that",self.std_name,"has learnt in C langauge are: ")
        for i in range(len(self.C_learning)):
            print(self.C_learning[i])
        print("\n\n")
        print("--------------------------------------------------------------------------------------------------------------\n")
        print("\n"+self.std_name,"Learning Python taught by", self.Py_Name_Professor)
        print("Topics that",self.std_name,"has learnt in Python are: ")
        for j in range(len(self.Py_learning)):
            print(self.Py_learning[i])
        print("\n\n")
        print("--------------------------------------------------------------------------------------------------------------\n")
        print("\n",self.std_name ,"is learning Web Desinging taught by", self.C_Name_Professor )
        print("Topics that",self.std_name,"has learnt in Web Desinging are: ")
        for i in range(len(self.Wd_learning)):
            print(self.Wd_learning[i])  
        print("\n\n")
        print("--------------------------------------------------------------------------------------------------------------\n")  

st_name=input("Enter Student Name: ")
enroll=input("Enter Enrollment No:")
course=input("Enter Course Name:")
c_prof=input("Enter Name of C langauge Professor: ")
c_learnin=[]
py_prof=input("Enter Name of Python Professor: ")
py_learnin=[]
wd_prof=input("Enter Name of Web Desinging Professor: ")
wd_learnin=[]
i=True
print("****************PRESS 'exit()' TO STOP ENTERING TOPICS**************************")
# input for c_learnin
while i :
    tmp=input("Enter C Topic: ")
    if tmp == "exit()":
        i=False
        continue
    else:
        c_learnin.append(tmp)

# input for py_learnin
i=True
while i :
    tmp=input("Enter Python Topic: ")
    if tmp == "exit()":
        i=False
        continue
    else:
        py_learnin.append(tmp)

# input for wd_learnin
i=True
while i :
    tmp=input("Enter Web Designing Topic: ")
    if tmp == "exit()":
        i=False
        continue
    else:
        wd_learnin.append(tmp)
stud=student(st_name,enroll,course,c_prof,c_learnin,py_prof,py_learnin,wd_prof,wd_learnin)
stud.display()
    