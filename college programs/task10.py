


class uka_university:
    name = ""
    def __init__(self, year_of_estd, city):
        self.year_of_estd = year_of_estd
        self.city = city 
    

# year_of_estd = input()
# city = input()

# uni_obj = uka_university(year_of_estd, city)

class professor(uka_university):
    # designation="desig"
    # highest_qualification=""
    # area_of_research=""
    # year_of_joining=""
    # name_of_institute=""
    def __init__(self, nam, desig, hi_qual, ar_re, yr_joi, nam_joi):
        self.name=nam
        self.designation=desig
        self.highest_qualification=hi_qual
        self.area_of_research=ar_re
        self.year_of_joining=yr_joi
        self.name_of_institute=nam_joi
        
    def display(self):
        uka_university.__init__(self,year_of_estd, city) 
        print("Name: ", self.name)
        print("Year of Establishment: ", self.year_of_estd)
        print("City: ", self.city) 
        print("Designation: ", self.designation)
        print("Highest Qualification: ", self.highest_qualification)
        print("Area of Research: ", self.area_of_research)
        print("Joined Year: ", self.year_of_joining)
        print("Institute Name: ", self.name_of_institute)
        
class lab_assistant(uka_university):
    Designation="Lab Assistant"
    def __init__(self, nam, hi_qual, add_skill, yr_joi, nam_ins ):
        self.name=nam
        self.highest_qualification=hi_qual
        self.additional_skill=add_skill
        self.year_of_joining=yr_joi
        self.name_of_institute=nam_ins
    
    def display(self):
        print("Name: ", self.name)
        uka_university.__init__(self,year_of_estd, city)
        print("Year of Establishment: ", self.year_of_estd)
        print("City: ", self.city) 
        print("Designation: ", self.Designation)
        print("Highest Qualification: ", self.highest_qualification)
        print("Additional_skills: ", self.additional_skill)
        print("Joined Year: ", self.year_of_joining)
        print("Name of the Institute: ", self.name_of_institute)
class office_assistant(uka_university):
    Designation="Office Assistant"
    def __init__(self,nam, hi_qual, yr_joi, nam_in):
        self.name=nam  
        self.highest_qualification=hi_qual
        self.year_of_joining=yr_joi
        self.name_of_institute=nam_in
    def display(self):
        print("Name: ", self.name)
        uka_university.__init__(self,year_of_estd, city)
        print("Year of Establishment: ", self.year_of_estd)
        print("City: ", self.city) 
        print("Designation: ", self.Designation)
        print("Highest Qualification: ", self.highest_qualification)
        print("Joined Year: ", self.year_of_joining)
        print("Name of the Institute: ", self.name_of_institute)
class peon(uka_university):
    job_role="Office Peon"    
    def __init__(self,nam, hi_qual, yr_joi, nam_in):
        self.name=nam  
        self.qualification=hi_qual
        self.year_of_joining=yr_joi
        self.name_of_institute=nam_in
    def display(self):
        print("Name: ", self.name)
        uka_university.__init__(self,year_of_estd, city)
        print("Year of Establishment: ", self.year_of_estd)
        print("City: ", self.city) 
        print("Job Role: ", self.job_role)
        print("Qualification: ", self.qualification)
        print("Joined Year: ", self.year_of_joining)
        print("Name of the Institute: ", self.name_of_institute)
nam=input("Enter your Name: ")
city=input("Enter the Name of the City where University is located: ")
year_of_estd=input("Enter the Establishment Year of The University: ")
uni=uka_university(year_of_estd, city)
choice=input('''Press following to select the profession:
1 : Professor
2 : Lab Assistant
3 : Office Assistant
4:  Peon
Enter your Choice: ''')

if choice == "1":
    desig=input("Enter the Designation of the Staff Member: ")
    hi_qual=input("Enter the Highest Qualification: ")
    ar_re=input("Enter the Area of Research: ")
    yr_joi=input("Enter the Joining Year: ")
    nam_joi=input("Enter the Name of the Institute: ")
    prof=professor(nam, desig, hi_qual, ar_re, yr_joi, nam_joi)
    print("\n\n**************")
    prof.display()
    print("**************\n\n")

if choice=="2":
    hi_qual=input("Enter the Highest Qualification: ")
    add_skill=input("Enter the Additional Skill: ")
    yr_joi=input("Enter the Joining Year: ")
    nam_ins=input("Enter the Name of the Institute: ")
    lab=lab_assistant(nam, hi_qual, add_skill, yr_joi, nam_ins) 
    print("\n\n**************")
    lab.display()
    print("**************\n\n")

if choice=="3":
    hi_qual=input("Enter the Highest Qualification: ")
    yr_joi=input("Enter the Joining Year: ")
    nam_in=input("Enter the Name of the Institute: ")
    offi=office_assistant(nam, hi_qual, yr_joi, nam_in)    
    print("\n\n**************")
    offi.display()
    print("**************\n\n")

if choice=="4":
    hi_qual=input("Enter the Qualification: ")
    yr_joi=input("Enter the Joining Year: ")
    nam_in=input("Enter the Name of the Institute: ")
    poe=peon(nam, hi_qual, yr_joi, nam_in)
    print("\n\n**************")
    poe.display()
    print("**************\n\n")
        