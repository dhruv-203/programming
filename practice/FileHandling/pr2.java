import java.io.*;
import java.util.Scanner;
public class pr2{
    public static void main(String[] args) {
        PrintWriter obj = System.console().writer();
        obj.write("Enter Your Name: "); // har write k baad flush krna hai 
        obj.flush();
        System.out.printf("my name is %s and i am %d years old","Dhruv",19);
        Console c = System.console();
        String name = c.readLine();
        obj.write(name);
        obj.flush();
    }
}