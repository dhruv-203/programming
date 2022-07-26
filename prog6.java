import java.util.Scanner;
public class prog6 {
    //6. write a program that prompts the user to enter a letter and check whether a letter is vowel or consonant    97 101 105 111 117
   // 65 69 73 79 85
    public static void main(String[] args) {
        String word;
        Scanner ask = new Scanner(System.in);
        System.out.print("Enter Alphabet: ");
        word = ask.next();
        int ascii =(int)word.charAt(0);
        // System.out.println(ascii);
        boolean check = (ascii==97||ascii==101||ascii==105||ascii==111||ascii==117||ascii==65||ascii==69||ascii==73||ascii==79||ascii==85);
        if(ascii>96&&ascii<123){
//lowercase 
            if(check){
                System.out.println("You have Entered a Lowercase Vowel");
            }
            else{
                System.out.println("You have Entered a lowercase Consonant");
            }
        }
        else if(ascii>64&&ascii<91){
//upper
            if(check){
                System.out.println("You have Entered Uppercase Vowel");
            }
            else{
                System.out.println("You have Entered Uppercase Consonant");
            }
        }

    }
}
