package practice;
import java.util.Scanner;
public class factorial {
    public static void main(String[] args) {
        Scanner ask = new Scanner(System.in); 
        System.out.print("Enter a Number: ");
        int number = ask.nextInt();
        long fact=1l;
        for(int i = number;i>1;i--){
            fact*=i;
            // System.out.println(fact);
        }
        System.out.println(fact);
    }
}
