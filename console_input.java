// taking inputs from the terminal
public class console_input{
    public static void main(String[] args) {
        int x= Integer.parseInt(args[0]);
        int y=Integer.parseInt(args[1]);
        System.out.print("The addition of the two numbers: ");
        System.out.println(x+y);
    }
}
// notes first compile this file by using javac nineth.java command then 
// run the class file by using java nineth [the number required without brackets][the number required without brackets]
// if we dont provide values and directly run the code it will give the error of array index out of bound