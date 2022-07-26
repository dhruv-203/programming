import java.util.Scanner;
public class decrese {
    public static void main(String args[]) {

        int no1,no2,no3;
        Scanner sc=new Scanner(System.in);
        System.out.print("enter number 1:- ");
        no1=sc.nextInt();
        System.out.print("enter number 2:- ");
        no2=sc.nextInt();
        System.out.print("enter number 3:- ");
        no3=sc.nextInt();
    
        if(no1<=no2){
            if(no2<=no3){
                System.out.println(no3+" "+no2+" "+no1);
            }
            else if (no3<=no1){
                System.out.print(no2+" "+no1+" "+no3);
            }
            else if (no1<=no3){
                System.out.print(no3+" "+no2+" "+no1);
            }
            }
         
        if (no2<=no1){
            if(no3<=no2){
                System.out.print(no1+" "+no2+" "+no3);
            }
            else if(no3<=no1){
                System.out.print(no1+" "+no3+" "+no2);
            }
            else if(no1<=no3){
                System.out.print(no3+" "+no1+" "+no2);
            }
        }    

        }
    }
    

