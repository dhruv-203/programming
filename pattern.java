import java.util.Scanner;

public class pattern {

    public static void main(String[] args) {
        //star patterns
        Scanner ask = new Scanner(System.in);
        System.out.print("Enter your Choice: ");
        int choice=ask.nextInt();
        System.out.print("Enter the number of Lines: ");
        int num = ask.nextInt();
        if (choice==1) {
            for(int i=1;i<=num;i++){
                for(int j=1;j<=i;j++){
                    System.out.print("*");
                }
                System.out.println("");
            }
        }
        if (choice==2) {
            for (int i = num; i>=0; i--) {
                for (int j = i; j >=0 ; j--) {
                    System.out.print("*");
                }
                System.out.println("");
            }
        }
        if (choice==3) {
            for (int i = 1; i<=(2*num-1);i=i+2) {
                for (int j = 1; j <= i; j++) {
                    System.out.print("*");
                }
                System.out.println("");
            }
        }
        if (choice==4) {
            int tmp=num-1;
            for (int i = 1; i <= (2*num-1); i=i+2) {
                for (int j = tmp; j>0; j--) {
                    System.out.print(" ");
                }
                tmp--;
                for (int k = 1; k<=i; k++) {
                    System.out.print("*");
                }
                System.out.println("");
            }
        }
        
    }
}
