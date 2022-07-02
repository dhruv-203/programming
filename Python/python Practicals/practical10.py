# B.Tech Computer Science and Engineering
# Dhruv Patel
# 202103103510445

## Options
opr = input("Enter add for addition\nEnter mul for multiplication\nEnter sub for Subtraction\nEnter div for division\nEnter anything else to exit\nEnter odev to check odd/even\n: ")

## Functions
def add(*list1):
	sum=0
	for i in range(0, len(list1)): sum = sum + list1[i]
	return sum

def mul(*list1):
	mul=1
	for i in range(0, len(list1)): mul = mul * list1[i]
	return mul

sub = lambda num1, num2: num1-num2
div = lambda num1, num2: num1/num2

def odev(num):
	if num%2==0: return 0
	else: return 1

## Main
if opr=="mul" or opr== "add":
	puts = int(input("Enter number of inputs: "))
	list1 = []
	for i in range(0, puts): list1.append(int(input("Enter Number: ")))
	if opr=="add": print("Sum is " + str(add(*list1)))
	elif opr=="mul": print("Product is " + str(mul(*list1)))
elif opr=="div" or opr=="sub":
	num1 = int(input("Enter number 1: "))
	num2 = int(input("Enter number 2: "))
	if opr=="sub": print(sub(num1, num2))
	elif opr=="div": print(div(num1, num2))
elif opr=="odev":
	num = int(input("Enter a number: "))
	if odev(num)==0: print("even")
	else: print("odd")