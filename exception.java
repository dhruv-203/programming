import java.util.Scanner;

public class exception {
    public static void main(String[] args) {
        Scanner ask = new Scanner(System.in);
        int[] b ={1,2,3,0,5,5,6,4};
        String txt = null;
        exception obj = new exception();
        try{

            try {
                System.out.print("ENter a Number: ");
                int a= ask.nextInt();
                System.out.println(10/a);
            } catch (ArithmeticException e) {
                e.printStackTrace();
            }
            try{
                for(int i=1,j=0;i<9&&j<8;i++,j++){
                    
                    System.out.println(i/b[j]);
                }
            }
            catch(ArrayIndexOutOfBoundsException e){
                e.printStackTrace();
            }
            catch(ArithmeticException e){
                e.printStackTrace();
            }
            System.out.println(txt.length());
        }
        catch(NullPointerException e){
            System.out.println("Null pointer exception from parent catch");
        }
        catch(Exception e){
        System.out.println("parent error occurred");
        }
    }
}
