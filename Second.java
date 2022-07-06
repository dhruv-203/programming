// java variables
public class Second{
    public static void main(String[] args){
        String name ="Patel Dhruv"; //non-primitiv data-type whose size is not fixed 
        int age= 18;
        int phone = 1234567890; // this is allowed
        // int phone2=12345678900; // this is not allowed as it exceed the range of int
        long phone2=12345678900L; // this Problem is solved by using long
        char single='s';
        boolean isthis=true;
        float pi=3.14F; // while mentioning the float vlues use F at the end to distinguish b/w the int and float
        final String address="home"; // final keyword is like const keyword in c lang

        System.out.print(name);
        System.out.print(age);
        System.out.print(single);
        System.out.print(isthis);
        System.out.print(pi);
        System.out.print(address);
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