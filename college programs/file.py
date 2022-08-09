def recieve():
    mylist=[]
    tmp=True
    print("enter -1 to stop the execution")
    while tmp:
        # print("dhruv")
        # print(type(tmp))
        mylist.append(int(input("enter a number: ")))
        if mylist[-1]==-1:
            mylist.remove(-1)
            tmp=False
            
    f = open("/home/202103103510445/Documents/Python_trials/number.txt", "w")
    # f.write("My list starts")
    for x in mylist:
        print(str(x))
        f.write(str(x))     # write takes the str arguments only 
    f.close()
recieve() 
# def operate():
#     f=open("/home/202103103510445/Documents/Python_trials/number.txt", "r")
#     #method1 to read from file using while
#     flag=True
#     li=[]
#     while flag:
#         x=f.readline()
#         li.append(x)