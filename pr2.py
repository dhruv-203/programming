def entry():
    list=[]
    flag=True
    while flag:
        buff=input("Enter the number: ")
        if buff=="exit":
            return list
        else:list.append(buff)
list=entry()
print(list)
small=list[0]
large=list[0]
for x in list:
    if small>x:
        small=x
    if large<x:
        large=x
print(small, large)