# B.Tech Computer Science and Engineering
# Dhruv Patel
# 202103103510445\

def order():
	x = int(input("Enter x: "))
	y = int(input("Enter y: "))
	return x,y

mat1 = []
def mat1p():
	x, y = order()
	print("\n\nMatrix 1: \n")
	for i in range(int(x)):
		mat1.append([])
		for j in range(int(y)):
			mat1[i].append(int(input("Enter [%d][%d] element of matrix 1: " % (i+1, j+1))))
	print("\n\nMatrix 1:")
	for i in range(int(x)):
		print("| ", end = "")
		for j in range(int(y)):
			if mat1[i][j] < 10:
				print("0", end="")
			print(str(mat1[i][j]) + " ", end="")
		print("|")

mat2 = []
def mat2p():
	x, y = order()
	print("\n\nMatrix 2: \n")
	for i in range(int(x)):
		mat2.append([])
		for j in range(int(y)):
			mat2[i].append(int(input("Enter [%d][%d] element of matrix 2: " % (i+1, j+1))))
	print("\n\nMatrix 2:")
	for i in range(int(x)):
		print("| ", end = "")
		for j in range(int(y)):
			if mat2[i][j] < 10:
				print("0", end="")
			print(str(mat2[i][j]) + " ", end="")
		print("|")


def add(mat1, mat2):
        print("\nAddition:")
        for i in range(int(x)):
                print("| ", end = "")
                for j in range(int(y)):
                        print(str(mat1[i][j]+ mat2[i][j]) + " ", end="")
                print("|")

def sub(mat1, mat2):
        print("\nSubtraction:")
        for i in range(int(x)):
                print("| ", end = "")
                for j in range(int(y)):
                        print(str(mat1[i][j]-mat2[i][j]) + " ", end="")
                print("|")

def trans(mat1):
	print("\nTranspose")
	for i in range(int(x)):
		print("| ", end = "")
		for j in range(int(y)):
			print(str(mat1[j][i]) + " ", end="")
		print("|")
def mul(mat1, mat2):
	print("\nMultiplication")
	for i in range(int(y)):
		print("| ", end= "")
		for j in range(int(y)):
			out = 0
			for k in range(int(x)):
				out = out + mat1[i][k]*mat2[k][j]
			print(str(out) + " ", end="")
		print("|")

opr = input("Enter add for addition\nEnter sub for subtraction\nEnter trans for transpose\nEnter mul for multiplication\n: ")
if opr=='add':
	mat1p()
	mat2p()
	add(mat1, mat2)
elif opr=='sub':
	mat1p()
	mat2p()
	sub(mat1, mat2)
elif opr=='trans':
	mat1p()
	trans(mat1)
elif opr=='mul':
	mat1p()
	tmp = x
	x = y
	y = tmp
	mat2p()
	mul(mat1, mat2)