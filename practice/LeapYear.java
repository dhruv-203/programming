package practice;
import java.util.Scanner;

public class LeapYear {
//     to check whether a year is leap, divide the year by 4 if its fully divisible 
// by 4 it is a leap year 
// example year 2016 is fully divisible by 4 
// therefore its a leap year whereas 2015 is not
// now however for a century year (like 1800, 1900,2000,2100 etc) it should be divisible by 400 then it is called a leap year
//  to solve this we write ****(year%400==0||year%100!=0)*** so if a century year is divisible 400 then it will be leap year 
//  nut the century years like 2100 are divisible 4 so to cope with this use above expression  
//long story short we use two conditions 
// 1. the year must be divisible by 4(i,e year%4) and(&&)
// 2. the year must be divisible by 400(i,e year%400==0) or(||) not divisible by the 100 (i,e year%100!=0)

    public static void main(String[] args) {
        Scanner ask = new Scanner(System.in);
        System.out.print("Enter Year: ");
        int year = ask.nextInt();
        if(year%4==0&&(year%400==0||year%100!=0)){
            System.out.printf("%d is a Leap Year\n",year);
        }
        else{
            System.out.printf("%d is not a Leap Year\n",year);            
        }
    }
}
