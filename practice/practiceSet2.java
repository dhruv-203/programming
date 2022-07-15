package practice;

public class practiceSet2 {
    public static void main(String[] args) {
        // first ques:
        // what is the value of float a = 7/4*9/2;
        // 7/4 both are integer so output will be integer therefore  1*9/2 -> 9/2-> 4 since 9 and 2 both are int 
        float a = 7/4*9/2;
        System.out.println(a);

        // second ques 
        // write a program to encrypt a grade by adding 8 to it Decrypt it to show the correct grade

        // int grade = 'A'/8 this will not give satisfactory result because this returns float and converting float to int will change the digits 
        // float grade = 'A'/8 this will still give same problem because ascii value and 8 both are integer so resultant will be an integer 
        // float grade = 'A'/8.0 this will give error as 8.0 is by default double and storing it in  float so there is an error
        // float grade = 'A'/8.0f; this is correct 
        // System.out.println((char)(grade*8)); this will return me A
        int grade = 'A'+8;
        System.out.println((char)(grade-8));
    }
}
