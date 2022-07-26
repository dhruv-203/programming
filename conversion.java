import java.util.Scanner;
public class conversion {

    public static void main(String args[]) {
        

    double num,km,cm,ft;
    System.out.println("enter the meter:-");

    Scanner sc=new Scanner(System.in);
    num=sc.nextFloat();

    km=1000*num;
    cm=num/100;
    ft=num/3.28084;
    System.out.println("meter to km :-"+km);
    System.out.println("meter to cm :-"+cm);
    System.out.println("meter to feet :-"+ft);
    }
    
}
