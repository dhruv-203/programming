import java.io.*;
public class pr3{
    public static void main(String[] args) throws Exception {
        int i;
        FileWriter obj = new FileWriter("file.txt");
        obj.write("Hellp there how are you i am fine bye bye cruel world");
        obj.close();
        FileReader obj1 = new FileReader("file.txt");
        while((i=obj1.read())!=-1){
            System.out.print((char) i);
        }
    }
}