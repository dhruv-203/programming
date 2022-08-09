import java.util.Random;

public class practical9 {
    public static void main(String[] args) {
        int[][] matrix = new int[6][6];
        Random genrate = new Random();
        int max = 1;
        int min = 0;
        // inserting values inside matrix
        for(int i = 0;i<6;i++){
            for(int j = 0;j<6;j++){
                matrix[i][j]=genrate.nextInt(max-min+1)+min;
            }
        }
        practical9 obj = new practical9();
        obj.output(matrix,6,6);   // printing values
System.out.println("\n\n\n");
        //printing the rows having odd 1's
        int counter;
        System.out.println("Following are the rows having odd 1's: ");
        for(int i = 0;i<6;i++){
            counter=0;
            for(int j = 0;j<6;j++){
                if(matrix[i][j]==1){
                    counter++;
                }
            }
            if(counter%2!=0){
            System.out.println(i+1);
            }
        }
        
        //printing the odd number of 1's in column
        System.out.println("Following are the column having odd 1's: ");
        for(int i = 0;i<6;i++){
            counter=0;
            for(int j = 0;j<6;j++){
                if(matrix[j][i]==1){
                    counter++;
                }
            }
            if(counter%2!=0){
            System.out.println(i+1);
            }
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
}
