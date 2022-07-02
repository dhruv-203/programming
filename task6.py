def sum(lis):
    sum=0
    for i in range(0,5):
        sum=sum+li[i]
    return sum


li=[]
for i in range(0,5):
    li.append(int(input("enter any number: ")))
print("The sum of five elements is",sum(li))

