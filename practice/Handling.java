import java.util.Scanner;
public class Handling{
    public static void main(String[] args){
    Scanner ask  = new Scanner(System.in);
    String mystr;
    System.out.print("Enter a string");
    mystr = ask.next();
    try{
        Handling.lengthfun(mystr);
    }
    catch(NullPointerException e){
        System.out.println("String can't be empty");
    }
    catch(StringIndexOutOfBoundsException e){
        System.out.println("String is not that long");
    }
    }
    private static void lengthfun(String str){
        System.out.println(str.charAt(10));
    }
}