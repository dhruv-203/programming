def mul_mat():
    m=int(input("Enter the Number of Rows in a Matrix A: "))
    n=int(input("Enter the Number of the Columns of the A Matrix and the Number of the Rows of the B Matrix: "))
    p=int(input('Enter the Number of the columns of the B Matrix: '))
    A=[]
    B=[]
    C=[]   #C=A*B
          # taking input of A matrix
    for x in range(m): # taking the input of the rows            
        row=[]
        for y in range(n):
            row.append(int(input('Enter the A i=%d, j=%d element:'%(x,y))))
        A.append(row)  # taking input of the columns 
        #taking input for B matrix
    print('Now Taking Input For matrix B..........\n\n')
    for q in range(n):    
        row=[]
        for s in range(p):
            row.append(int(input('Enter the B i=%d, j=%d element:'%(q,s))))
        B.append(row)
    # print(A,'hello',B)    
    #cij=summation for k=1 to n(aik*bkj)
    for i in range(m):     # c is m*p so taking rows and columns 
        row=[]
        for j in range(p):
            c=0
            for k in range(n):
                tmp=A[i][k]*B[k][j]
                c=c+tmp
            row.append(c)
        C.append(row)
    # print(C)
    return C


def entry(p):
    m=int(input("Enter the Number of Rows in a Matrix A and the Number of the Rows of the B Matrix: "))
    # for matrix addition and subtraction the number of rows and columns should be equal
    n=int(input("Enter the Number of the Columns of the A Matrix and the Number of the Columns of the B Matrix: "))
    A=[]
    B=[]   
    # taking inputs for A matrix
    for x in range(m): # taking the input of the rows            
        row=[]
        for y in range(n):
            row.append(int(input('Enter the A i=%d, j=%d element:'%(x,y))))
        A.append(row)  # taking input of the columns 
        #taking input for B matrix 
    for x in range(m): # taking the input of the rows            
        row=[]
        for y in range(n):
            row.append(int(input('Enter the B i=%d, j=%d element:'%(x,y))))
        B.append(row)  # taking input of the columns 

    return add_sub(A,B,m,n,p)
       
def transpose():
    m=int(input("Enter the Number of Rows in a Matrix A: "))
    # for matrix addition and subtraction the number of rows and columns should be equal
    n=int(input("Enter the Number of the Columns of the A Matrix: "))
    A=[] # A dimensions are m*n 
    B=[] # after the tranpose the dimensions of the B will become n*m
    # taking inputs for A matrix
    for x in range(m): # taking the input of the rows            
        row=[]
        for y in range(n):
            row.append(int(input('Enter the A i=%d, j=%d element:'%(x,y))))
        A.append(row)  # taking input of the columns   
    for i in range(n):
        row=[]
        for j in range(m):
            row.append(A[j][i])
        B.append(row)    
    return B


def add_sub(A,B,m,n,p):
    C=[]
    for i in range(m):
        row=[]
        for j in range(n):
            if p==1:
                row.append(A[i][j]+B[i][j])
            elif p==2:
                row.append(A[i][j]-B[i][j])
        C.append(row)
    return C

def mat_out(A):
    for x in range(len(A)):
        print('|', end='')
        for y in range(len(A[x])):
            if y<=(len(A[x])-2):
                if A[x][y]>9:
                    print(A[x][y],"   ",end="")
                else:
                    print(A[x][y],"  ",end="")
                    
            else:
                print(A[x][y],end="")
        print('|')    
# entry(1)


    # print(c)
choice=int(input("Enter the following choice:\n1. Press 1 for Matrix Addition\n2. Press 2 for Matrix Subtraction\n3. Press 3 for Matrix Multiplication\n4. Press 4 for Transpose of a Matrix\nEnter Here: "))
if choice==1:
    A=entry(1)
    print('The Addition of Matrix is : ')
    mat_out(A)
if choice==2:
    A=entry(2)
    print('The Subtraction of the Matrix : ')
    mat_out(A)
if choice==3:
    A=mul_mat()
    print('The Multiplication of the matrix :')
    mat_out(A)
if choice==4:
    A=transpose()
    print('The Transpose of the of the Matrix :')
    mat_out(A)
