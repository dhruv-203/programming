# ith element of the sparse matrix is an array containing the i,j,value(non-zero)

class Sparse:
    def getSparseMatrix(self, normalMatrix):
        sparseMatrix = []
        for i in range(0, len(normalMatrix)):
            for j in range(0, len(normalMatrix[i])):
                if normalMatrix[i][j] != 0:
                    sparseMatrix.append([i, j, normalMatrix[i][j]])

        return sparseMatrix

    def displaySparseMatrix(self, sparseMatrix):
        for i in range(0, 3):
            print("|", end=" ")
            for j in range(0, len(sparseMatrix)):
                print(sparseMatrix[j][i], end=" ")
            print("|")

    def getNormalMatrix(self, m, n):
        print("Taking Inputs for Matrix....")
        normalMatrix = []
        for i in range(0, m):
            temp = []
            for j in range(0, n):
                temp.append(int(input(f"{i}th and {j}th Element: ")))
            normalMatrix.append(temp)
        return normalMatrix

    def displayNormalMatrix(self, normalMatrix):
        for i in range(0, len(normalMatrix)):
            print("| ", end="")
            for j in range(0, len(normalMatrix[i])):
                print(normalMatrix[i][j], end=" ")
            print("|")


obj = Sparse()
A = obj.getNormalMatrix(3, 3)
obj.displayNormalMatrix(A)
print("\n")
B = obj.getSparseMatrix(A)
obj.displaySparseMatrix(B)
