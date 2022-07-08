// taking inputs
import java.util.Scanner;
public class eight {
    public static void main(String[] args){
        Scanner ask = new Scanner(System.in);
        System.out.print("Enter an Integer: ");
        int inp= ask.nextInt(); // taking integer inputs
        System.out.println(inp);

        System.out.print("Enter a Statement: ");
        String text = ask.next(); // it will only take the first word from the String as it takes values in tokens
        System.out.println(text);
        /*
         giving error
         System.out.println("Enter a Statement: ");
         String text1 = ask.nextLine();
         System.out.println(text1);
         */
        //this is solved by using new scanner obj
        Scanner str = new Scanner(System.in);
        System.out.println("Enter a Statement: "); // dont know why 
         String text1 = str.nextLine();
         System.out.println(text1);
    }
}
