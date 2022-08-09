# def add(a,b):
#     sum=a+b
#     a=7
#     return sum 

# a=int(input("Enter number"))
# b=int(input("Enter number"))
# print(add(a,b))
# print(a)

#from msilib.schema import Class


def string(*n):
    # print("my arb variable", n)
    n=list(n)
    n[0]= n[0].replace("<NAME>", n[1])
    n[0]= n[0].replace("<CLASS>", n[2])
    n[0]= n[0].replace("<SPORT>", n[3])
    print(n[0])
    # return letter1

letter1 = '''Dear Sir/Madam,
I am <NAME> the student of <CLASS> and I want to borrow the sports Equipments as it is our sports period
and we wish to play <SPORT> and we seek your permission as our sport coordinator 
kindly grant us the permission 
your faithfully
<NAME>'''
name= input("Enter your Name: ")
dept = input("Enter your class: ")
sport= input("Enter the sport you wish to play: ")

letter1 = string(letter1, name, dept, sport )
# print(letter1)