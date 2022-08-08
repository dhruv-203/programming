import java.util.Scanner;
public class array_rev_prog {
    public static void main(String[] args) {
        array_rev_prog obj = new array_rev_prog();
        obj.input();
    }
    void input(){
        Scanner ask = new Scanner(System.in);
        array_rev_prog obj = new array_rev_prog();
        int[] arr = new int[10];
        for(int i =0;i<10;i++){
            System.out.print("Enter a Number: ");
            arr[i]= ask.nextInt();
        }
        obj.output(arr);
    }

    void output(int[] numberCont){
        System.out.println("\n\n\nReverse Numbers: ");
        for(int i=9;i>=0;i--){
            System.out.println(numberCont[i]);
        }
    }
}
