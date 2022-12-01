import java.io.*;
public class pr1{
    public static void main(String[] args) {
        String a = "hello this is dhruv patel";
            byte[] b = a.getBytes();
            String tmp = "" ;
            int j;
        try{
            FileOutputStream obj = new FileOutputStream("myfile.txt");
            obj.write(b);
            obj.close();
            FileInputStream obj1 = new FileInputStream("myfile.txt");
            int off = obj1.available();
            // System.out.println((char) obj1.read());

            /* obj1.read() calling this it reads the next byte to it automatically hence we store the value of obj1.read() first */

            // while(( j = obj1.read()) != -1){  
            // tmp = tmp + String.valueOf((char) obj1.read());
            //     System.out.println((char) j);
            // }
            
            for (int i = 0;i<off; i++) {
                // System.out.print((char) obj1.read());
                tmp = tmp + String.valueOf((char) obj1.read());
            }
            System.out.println(tmp);
            obj1.close();
        }
        catch(Exception e){
            System.out.println(e.getMessage());
        }
    }
}