#pass a list of atleast of 10 elements of type integer and create a user defined function which will take list as a argument and returns the max and min value inside the list
#take a note that no i/o functions should be used inside the function 


def decision(li):
    small=li[0]
    large=li[0]
    for x in li:
        if x < small:
            small=x
        if x > large:
            large=x
    return small, large
    # print(small)
    



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
res=decision(mylist)
# print(mylist)      
    # print(mylist)
# print(type(decision(mylist))) return type is tuple 
print("The Minimum value is", res[0])
print("The Maximum value is", res[1])
