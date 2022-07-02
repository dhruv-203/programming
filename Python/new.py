# class book:
#     def __init__(self, name, writer, pages):
#         self.name=name
#         self.writer=writer
#         self.pages=pages
#     def __eq__(self, other):
#         return (self.name==other.name)and (self.writer==other.writer)

# a = book("helen keller", "sudha murty", "500")
# b = book("helen keller", "sudha murty", "600")
# print(a==b)

# try : 
# 	a = int(input("Enter number: "))
# 	b = int(input("Enter number: ")) 
# 	print(a/b)
# except ZeroDivisionError:
# 	print("Denominator can't be zero ")
# except ValueError:
# 	print("Please Enter a Valid Integer")

# import re 
# content = '''hello world in python dhruv '''
# word= input("Enter the word: ")
# pattern=re.compile(r"%s"%(word)) # compile returns a regular expression object on which we can apply re module methods
# match=pattern.search(content)
# print(match)
# if match==None:  # remember None captial N
# 	print("No Match Found ")
# else: 
# 	print("Match Found!!!") 

# import re

# f= open("d.txt", "r")
# content=f.read()
# f.close()
# pattern=re.compile(r"2021\d{11}")
# matches=pattern.finditer(content)
# matches=list(matches)
# for i in matches:
#     print(i.group(0))

import re 
pattern=re.compile(r"[a]|.*[a]$")
word=input("Enter the word: ")
matches=pattern.match(word)
if matches!=None:
    print("match found!!!")
else:
    print("gand mara")