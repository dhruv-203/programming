// convert a input matrix into a sparse matrix
import java.util.Scanner;
import java.util.ArrayList;
public class Sparse{
    Scanner ask = new Scanner(System.in);
    int[][] inputCall(int i, int j){
        int[][] matrix = new int[i][j];
        for(int k=0;k<i;k++){
            for(int l = 0;l<j;l++){
                System.out.printf("Enter %d and %d: ",k,l);
                matrix[k][l]=ask.nextInt();
            }
        }
        return matrix;
    }
    void showOutput(ArrayList<Integer[]> matrix){
        for(int j=0;j<3;j++){
            for(int i = 0; i<matrix.size();i++){
                System.out.print(matrix.get(i)[j]+" ");
            }
            System.out.println();
        }
    }
    
    void getSparse(int[][] matrix){
        // getting non-zerors 
        // size = 0;
        Sparse obj = new Sparse();
        ArrayList<Integer[]> indices = new ArrayList<Integer[]>();
        for(Integer i = 0; i<matrix.length;i++){
            for(Integer j = 0; j<matrix[i].length;j++){
                Integer[] temp = new Integer[3];
                    if(matrix[i][j]!=0){
                    // size++;
                    temp[0]=i;
                    temp[1]=j;
                    temp[2]=matrix[i][j];
                    indices.add(temp);
                }
            }
            
        }
      
        obj.showOutput(indices);
        
    }
    public static void main(String[] args){
        Sparse obj = new Sparse();
        int[][] matrix = obj.inputCall(3,3);
        obj.getSparse(matrix);
    }
}
