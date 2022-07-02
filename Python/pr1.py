def entry(list):
    flag=True
    while flag:
        buff=input("Enter the number: ")
        if buff=="exit":
            return list
        else:list.append(buff)
def logic(list):
    boff=[]
    res=[]
        
    for x in list:
        tmp=0
        for y in list:
            if x==y:
                tmp=tmp+1
        boff.append((x,tmp))
    count=0
    for x in boff:
        flag=True
        count=count+1
        if count==1:
            res.append(x)
        for y in res:
            if x[0]==y[0]:
                flag=False
        if flag:
            res.append(x)
    print(res)        

         
        
    # print(res)        

lis=[]
lis=entry(lis)
print(lis)
logic(lis)
