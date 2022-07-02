#BTech Computer Science and Engineering
#Dhruv Patel
#202103103510445

''' Develop a prime number generator function primeNator(). Ask the user for the input of the largest, up to which user wants to genrate prime numbers. Design program in such a way that gives total execution time for generation of prime numbers. '''

import time
st=time.process_time()
std=time.time()
def primeNator(number):
    lis=[]
    for j in range(number):
        if j==1 or j==0:
            pass
        tmp=True
        for i in range(int(j/2)+1):  #as j can be float on dividing with odd number
            if i>1 and j%i==0:
                tmp=False
                break
        if  tmp:
            lis.append(j)
    display(lis)
def display(lis):
    print()
    for i in lis:
        print(i)
    ed=time.process_time()
    print("CPU time for execution  of the calculation part: ", ed-st,"Seconds")
    print("Total time for the execution of the program: ", time.time()-std,"Seconds")

def entry():
    try:
        num=int(input("Enter a input of the Larget Number up to which you wants to generate Prime Numbers: "))
        print("Following are the Prime Numbers up to", num,':')
        print("Processing Your REQUEST........", end=" ")
        primeNator(num)    
    except ValueError: 
        print("Enter an Integer")
        entry()
entry()