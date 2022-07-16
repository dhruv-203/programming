import java.util.Scanner;
public class recursion {
    long factorial(int num){
        if(num==0||num==1){
            return 1;
        }
        else{
            return num*factorial(num-1);
        }
    }
    int fibonacci(int num){
       if(num==1){
           return 0;
       }    
       else if(num==2){
            return 1;
       } 
       else{
           return fibonacci(num-1)+fibonacci(num-2);
       }
    }
    public static void main(String[] args) {
        Scanner ask = new Scanner(System.in);
        System.out.print("Enter a Number: ");
        int num=ask.nextInt();
        recursion obj = new recursion();
        System.out.printf("The Factorial of %d = %d\n",num, obj.factorial(num));
        System.out.printf("The %dth term of fibonacci sequence: %d\n",num,obj.fibonacci(num));
        System.out.println("Printing the First n terms of Fibonacci Sequence: ");
        System.out.print("The Sequence:  ");
        for(int i=1;i<=num;i++){
            System.out.print(obj.fibonacci(i)+" ");
        }
    }
}
