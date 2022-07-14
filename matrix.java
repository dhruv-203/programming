import java.util.Scanner;
public class matrix {
    static Scanner ask = new Scanner(System.in);
    public static void main(String[] args) {
        int m,n;
        matrix obj = new matrix();
        System.out.print("Enter Your Choice: ");
        int choice = ask.nextInt();
        
        if (choice<3||choice==4){
            System.out.print("Enter the Number of Rows: ");
            m=ask.nextInt();
            System.out.print("Enter the Number of Columns: ");
            n=ask.nextInt();
            int [][] A = new int[m][n];
            int [][] B = new int[m][n];// square matrix is taken by default so that addition and subtraction can be performed
            int [][] C =new int[m][n];
            if(choice<3){
                A = obj.input(m, n);
                B = obj.input(m, n);
                C=obj.addorsub(A,B,m, n, choice);
            }
            else{
                A = obj.input(m, n);
                C=obj.transpose(A, m, n);
            }
            obj.output(C,m,n);
        }
        else if(choice==3){
            System.out.print("Enter the Number of Rows in a Matrix A: ");
            int row = ask.nextInt();
            System.out.print("Enter the Number of the Columns of the A Matrix and the Number of the Rows of the B Matrix: ");
            int col = ask.nextInt();
            System.out.print("Enter the Number of the columns of the B Matrix: ");
            int colofB = ask.nextInt();
            int [][] A = new int[row][col];//A mxn
            int [][] B = new int[col][colofB]; // B nxp
            int [][] C =new int[row][colofB]; // C mxp
            A= obj.input(row, col);
            B = obj.input(col, colofB);
            C=obj.multi(row, col, colofB,A,B);
            obj.output(C, row, colofB);
        }
       
        
    }
    void output(int[][] C,int m,int n){
        for (int i = 0; i < m; i++) {               // printing output
            for (int j = 0; j < n; j++) {
                System.out.print(C[i][j]+"   ");
            }
            System.out.println("");
        }
    }
        int [][] transpose(int [][] A,int m,int n){
            int[][] B = new int [n][m];
            for (int i = 0; i < m; i++) {
                for (int j = 0; j < n; j++) {
                    B[j][i]=A[i][j];
                }
            }
            return B;
        }
        int [][] multi(int m,int n,int p,int[][] A, int[][] B){
            
            // c = summation k=1 to k=n (Aik*Bkj) where n is above input taken 
            // c is mxp 
            int [][] C = new int [m][p];
            for (int i = 0; i < m; i++) {
                for (int j = 0; j < p; j++) {
                    int c=0;
                    for(int k=0;k<n;k++){
                        c+=(A[i][k]*B[k][j]);
                    }
                    C[i][j]=c;
                }
            }
            return C;

        }
        int [][] addorsub(int[][] A,int[][] B,int m,int n,int choice){
            int [][] C = new int[m][n];
            if(choice==1){
                // Addition of matrix
        for (int i = 0; i < m; i++) {
            for (int j = 0; j < n; j++) {
                C[i][j]=A[i][j]+B[i][j];
            }
        }
        }
            
            else{
                // Subtraction of matrix
        
        for (int i = 0; i < m; i++) {
            for (int j = 0; j < n; j++) {
                C[i][j]=A[i][j]-B[i][j];
            }
        }
            }
        return C;
        }
        int [] [] input(int m, int n){
        Scanner ask = new Scanner(System.in);
        int [][] A = new int [m] [n];
        
         for (int i = 0; i < m; i++) {
            for (int j = 0; j < n; j++) {
                System.out.print("Enter Element at "+(i+1)+" "+(j+1)+": ");
                A[i][j]=ask.nextInt();
            }
        }
        return A;

    }
}
