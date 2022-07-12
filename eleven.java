import java.util.Scanner;

// practical-2
// calculator using switch-case
public class eleven{
    public static void main(String[] args) {
        Scanner ask = new Scanner(System.in);
        System.out.print("Enter First Number: ");
        int num1 = ask.nextInt();
        System.out.print("Enter Second Number: ");
        int num2 = ask.nextInt();
        System.out.println("Press 1 for Addition\nPress 2 for Subtraction\nPress 3 for Multiplication\nPress 4 for Divison\nPress 5 for Modulo operator");
        System.out.print("Enter Your Choice:");
        int choice=ask.nextInt();
        switch (choice) {
            case 1:
                System.out.print("The Addition is: ");
                System.out.println(num1+num2);
                break;
            case 2:
                System.out.print("The Subtraction is: ");
                System.out.println(num1+num2);
            case 3 :
                System.out.print("The Multiplication is: ");
                System.out.println(num1*num2);
            case 4:
                System.out.print("The Divison is: ");
                System.out.println(num1/num2);
            case 5:
                System.out.print("The Remainder is: ");
                System.out.println(num1%num2); 
        }
        
    }
}