def factorial(n):
    if n>1:
        return n*factorial(n-1)
    elif n==0 or n==1:
        return 1

n = int(input("Enter Number "))
print(factorial(n))