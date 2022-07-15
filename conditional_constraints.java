import java.util.Scanner;
 // comparison operators :
        // a==b ;a is equal to b
        // a!=b; a is not equal to b
        // a<b; a is less than b
        // a>b; a is greater than b
        // a>=b; a is greater than or equal to b
        // a<=b; a is less than or equal to b
// logical operators:
        //&& -- logical and operator
        //|| -- logical OR operator
        // \! -- logical NOT (ignore backlash)
public class conditional_constraints{
    static int percent ;
    public static void main(String[] args) {
        // a simple grading system based on the percentage of the user
        int[] stu1 = new int[3];
        int[] stu2 = new int[3];
        int[] stu3 = new int[3];
        int choice;
        Scanner ask = new Scanner(System.in);
        System.out.print("Enter Your Choice: ");
        choice = ask.nextInt();
        switch (choice) {
            case 1: {
                for (int i = 0; i < stu1.length; i++) {
                    System.out.print("Enter Marks: ");
                    stu1[i]=ask.nextInt();
                }
                conditional_constraints.percent = (stu1[0]+stu1[1]+stu1[2])/3;
                System.out.println("The Percent of the Student 1: "+percent);
                break;
            }
            case 2: {
                for (int i = 0; i < stu2.length; i++) {
                    System.out.print("Enter Marks: ");
                    stu2[i]=ask.nextInt();
                }
                conditional_constraints.percent = (stu2[0]+stu2[1]+stu2[2])/3;
                System.out.println("The Percent of the Student 2: "+percent);
                break;
            }
            case 3: {
                for (int i = 0; i < stu3.length; i++) {
                    System.out.print("Enter Marks: ");
                    stu3[i]=ask.nextInt();
                }
                conditional_constraints.percent = (stu3[0]+stu3[1]+stu3[2])/3;
                System.out.println("The Percent of the Student 3: "+percent);
                break;
            }
        }
        if( conditional_constraints.percent>=80){
            System.out.println("Congratulation!! You've passed with distinction");
        }
        else if(conditional_constraints.percent<80&&conditional_constraints.percent>=65){
            System.out.println("You've Passed with First Class");
        }
        else if(conditional_constraints.percent<65&&conditional_constraints.percent>=50){
            System.out.println("You've passed with Second Class");
        }
        else if(conditional_constraints.percent<50&&conditional_constraints.percent>35){
            System.out.println("You've passed");
        }
        else{
            System.out.println("You've Failed Better Luck Next Time");
        }



    }
}
