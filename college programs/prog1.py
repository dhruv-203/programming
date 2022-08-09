from unicodedata import name


class uka_university:
    name = ""
    def __init__(self, year_of_estd, city):
        self.year_of_estd = year_of_estd
        self.city = city 
    def display(self):
        
        print("Year of Establishment: ", self.year_of_estd)
        print("City: ", self.city) 

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
        print("Name: ", self.name)
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
        print("Designation: ", self.Designation)
        print("Highest Qualification: ", self.highest_qualification)
        print("Additional_skills: ", self.additional_skill)
        print("Joined Year: ", self.year_of_joining)
        print("Name of the Institute: ", self.name_of_institute)
class office_assitant(uka_university):
    Designation="Office Assistant"
    def __init__(self,nam, hi_qual, yr_joi, nam_in):
        self.name=nam  
        self.highest_qualification=hi_qual
        self.year_of_joining=yr_joi
        self.name_of_institute=nam_in
    def display(self):
        print("Name: ", self.name)
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
        print("Job Role: ", self.job_role)
        print("Qualification: ", self.qualification)
        print("Joined Year: ", self.year_of_joining)
        print("Name of the Institute: ", self.name_of_institute)


        
    
        
        # def get(self):
        #  self.name=input("Enter your Name: ")
        # self.year_of_estd=input("Enter the Establishment Year of The University: ")
        # self.city=input("Enter the Name of the City where University is located: ")
        # self.designation=input("Enter the Designation: ")
        # self.highest_qualification=input("Enter the Highest Qualification of the person:")
        # self.area_of_research=input("Enter the Area of Research: ")
        # self.year_of_joining=input("Enter the Joining Date: ")
        # self.name_of_institute=input("Enter the Name of Institute: ")