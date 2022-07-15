// java variables
public class data_type{
    public static void main(String[] args){
        String name ="Patel Dhruv"; //non-primitive data-type whose size is not fixed 
        int age= 18;
        int phone = 1234567890; // this is allowed
        // int phone2=12345678900; // this is not allowed as it exceed the range of int
        long phone2=12345678900L; // this Problem is solved by using long
        char single='s'; // char stores value in unicode like C so here ASCII values comes in picture
        short iamshort=789; // int short and byte doesn't need to define with character at the end like float double 
        // remember in short byte int doesn't need character at the end 
        byte iambyte=12;
        boolean isthis=true;
        float pi=3.14F; // while mentioning the float values use F at the end to distinguish b/w the int and float
        final String address="home"; // final keyword is like const keyword in c lang

        System.out.print(name);
        System.out.print(age);
        System.out.print(single);
        System.out.print(isthis);
        System.out.print(pi);
        System.out.print(address);
        System.out.println(++single);// this will print t 
    }
}
/*
   data-type    size
    byte     -    1     [-128-127] 8bit = 1 byte but msb is reserved for signed/unsigned so 2^7=128
    short    -    2
    int      -    4
    long     -    8
    float    -    4
    double   -    8
    char     -    2
    boolean  -    1 true/false
 */