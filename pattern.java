import java.util.Scanner;

public class pattern {

    public static void main(String[] args) {
        //star patterns
        int choice;
        Scanner ask = new Scanner(System.in);
        // System.out.print("Enter your Choice: ");
        System.out.print("Enter the number of Lines: ");
        int num = ask.nextInt();
        // choice= ask.nextInt();
        
            for(int i=1;i<=num;i++){
                for(int j=1;j<=i;j++){
                    System.out.print("*");
                }
                System.out.println("");
            }
        
            for(int k=num;k<=1;k--){
                for(int l=k;l<0;l--){
                    System.out.print("*");
                }
                System.out.println("jkb");
            }
        
    }
}
