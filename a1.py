num=int(input("Enter the number of the lines: "))
for i in range(1,num+1):
    for j in range(1,i+1):
        print('*', end='') 
    print() 
num=int(input("Enter the number of the lines: "))    
tp=num
for i in range(1,num+1):
    for j in range(tp,0,-1):
        print("*", end='')
    tp=tp-1    
    print()
tp=num
for i in range(1,num+1):
    for j in range(tp,0,-1):
        print(end=' ')
    tp=tp-1
    for k in range(0,(2*i-1)):
        print('*', end='')
    print()