package practice;
import java.util.Scanner;
public class pat {
    void pattern(int num, int choice){
        if(choice==1){

            for (int i = 1; i <= num; i++) {
                stars(i);
                System.out.println("");
            }
        }
        else if(choice==2){
            for (int i = num;i>0;i--){
                stars(i);
                System.out.println("");
            }
        }
    }
    static void stars(int num){
        if(num==1){
            System.out.print("*");
        }
        else{
            System.out.print("*");
            stars(num-1);
        }
    }
    
    public static void main(String[] args) {
        Scanner ask = new Scanner(System.in);
        System.out.print("Enter the Number of Line:  ");
        int num = ask.nextInt();
        System.out.print("Enter Your Choice: ");
        int choice = ask.nextInt();
        pat obj = new pat();
        obj.pattern(num, choice); 

    }
}
