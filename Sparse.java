import java.util.ArrayList;
import java.util.Scanner;

public class Sparse {

  Scanner ask = new Scanner(System.in);

  int[][] getNormalMatrix(int i, int j) {
    System.out.println("");
    int[][] matrix = new int[i][j];
    for (int k = 0; k < i; k++) {
      for (int l = 0; l < j; l++) {
        System.out.printf("Enter %d and %d: ", k, l);
        matrix[k][l] = ask.nextInt();
      }
    }
    return matrix;
  }

  void getSparseMatrix(int[][] matrix) {
    // getting non-zerors
    // size = 0;
    Sparse obj = new Sparse();
    ArrayList<Integer[]> indices = new ArrayList<Integer[]>();
    for (Integer i = 0; i < matrix.length; i++) {
      for (Integer j = 0; j < matrix[i].length; j++) {
        Integer[] temp = new Integer[3];
        if (matrix[i][j] != 0) {
          // size++;
          temp[0] = i;
          temp[1] = j;
          temp[2] = matrix[i][j];
          indices.add(temp);
        }
      }
    }

    obj.displaySparseMatrix(indices);
  }

  void displayNormalMatrix(int[][] matrix) {
    for (int i = 0; i < matrix.length; i++) {
      for (int j = 0; j < matrix[i].length; j++) {
        System.out.print(matrix[i][j] + " ");
      }
      System.out.println("");
    }
  }

  void displaySparseMatrix(ArrayList<Integer[]> matrix) {
    System.out.println("");
    for (int j = 0; j < 3; j++) {
      for (int i = 0; i < matrix.size(); i++) {
        System.out.print(matrix.get(i)[j] + " ");
      }
      System.out.println();
    }
  }

  public static void main(String[] args) {
    Sparse obj = new Sparse();
    int[][] matrix = obj.getNormalMatrix(3, 3);
    obj.displayNormalMatrix(matrix);
    obj.getSparseMatrix(matrix);
  }
}
