import re
reg=re.compile('[A]')
word= input("Enter any word")
z=reg.search(word)
if z!=None:
    print("'%s' contains 'A'" %(word))
else:
    print("'%s' doesn't contains A" %(word))