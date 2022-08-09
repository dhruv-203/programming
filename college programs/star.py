num=int(input("Enter the number of the lines "))

# normal star print 
for i in range(num):
    for j in range(i):
        print("*", end="")
    print()