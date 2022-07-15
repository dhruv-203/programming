package practice;
import java.util.Scanner;

public class ps3 {
    public static void main(String[] args) {
       // it removes extra spaces from the string 

        Scanner ask = new Scanner(System.in);
        System.out.println("Enter your String: ");
        String text= ask.nextLine();
        boolean Bol = true;
        while (Bol) {
            text = text.replace("  ", " ");
            Bol=text.contains("  ");
        }
        System.out.println(text);
    }
}
