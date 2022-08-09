# from re import L


def entry():
    lst=[]
    flag=True
    while flag:
        y=input('Enter the input:')
        if y=="exit()":
            flag=False
        else:            
            lst.append(y)
    return lst
    



# lst1=[]
# lst2=[]
# com1=[]
# com2=[]
# print('enter "exit()" to stop giving the input in the list')
# print('\n\n\nTaking Inputs For list 1.......')
# lst1=entry()
# # print(lst1) 
# print('Taking Inputs For list 2.........')   
# lst2=entry()

# for p in lst1:
#     tmp=0
#     for q in range(len(lst1)):
#         if p==lst1[q]:
#             tmp=tmp+1
#     if tmp>1 :
#         flag=True
#         for z in range(len(com1)):   # making sure that the p element is already present in com1 or not
#             if p==com1[z][0]:
#                 flag=False
#                 break
#         if flag: 
#             com1.append([p,tmp])
# for s in lst2:
#     tmp=0
#     for q in range(len(lst2)):
#         if s==lst2[q]:
#             tmp=tmp+1
#     if tmp>1 :
#         flag=True
#         for z in range(len(com2)):   # making sure that the p element is already present in com1 or not
#             if s==com2[z][0]:
#                 flag=False
#                 break
#         if flag: 
#             com2.append([s,tmp])
# com3=[]
# # print(com2)
# # now we will make com3 that will store the common elements ofcom1 and com2 along with not common elements
# #elements if they are common then the second element in tupple should get added thats will give total times repeatation 
# for x in com1:
#     for y in com2:
#         if x[0]==y[0]:
#             tmp=x[1]+y[1]
#             com3.append([x[0],tmp])
# for x in com3:
#     flag=True
#     for y in com1:
#         if x[0]== y[0]:
#             flag=False
#     if flag:
#         com3.append(y)    
            
            
#     flag=True
#     for z in com2:
#         if x[0]==z[0]:
#             flag=False
#     if flag:
#         com3.append(z)
# for x in lst1:
#     for y in lst2:
#         if x==y:
            
#             com3.append([x[0],tmp])               
# print(com3)     
lst1=[]
lst2=[]
print('enter "exit()" to stop giving the input in the list')
print('\n\n\nTaking Inputs For list 1.......')
lst1=entry()
# print(lst1) 
print('Taking Inputs For list 2.........')   
lst2=entry()   

for x in lst2:
    lst1.append(x)         
            
com=[]            
for p in lst1:
    tmp=0
    for q in range(len(lst1)):
        if p==lst1[q]:
            tmp=tmp+1
    if tmp>1 :
        flag=True
        for z in range(len(com)):   # making sure that the p element is already present in com or not
            if p==com[z][0]:
                flag=False
                break
        if flag: 
            com.append([p,tmp])
for x in com:
    print("the element",x[0],"repeats",'%d times'%(x[1]))       
        