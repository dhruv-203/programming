import random
har="1234567890"
le=int(input("enter the length of the char: "))
password=''
for i in range(le):
    password=password+random.choice(har)
print(password)