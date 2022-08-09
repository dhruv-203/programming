f=open("/home/202103103510445/Documents/Python_trials/number.txt", "r")
""" for x in f:
    x=f.readline()
    print(x)
f.close()
# f=open("/home/202103103510445/Documents/Python_trials/number.txt", "r")
# flag=True
# while flag:
#     y=f.readline()
#     print(y)
#     if y=='null':
#         flag=False    
# f.close() """

lst = []
flag = True
while flag:
    x = f.readline()
    y=list(x)
    y.pop(-1)
    y.pop(-2)
    
    if x == '':
        print("Its EOF...")
        flag = False
    else:
        
        lst.append(x)
        print("Printed...")
print(lst)