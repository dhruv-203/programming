public class resultant_datatype{
    public static void main(String[] args) {
          // following is the summarize of the resulting data-type after arithmetic operation 
/*
R = b+s -> int
R = s+i -> int
R = l+f -> float                b -> byte       f -> float     
R = i+f -> float                s -> short      d -> double 
R = C+i -> int                  i -> integer    C -> character
R = l+d -> double               l -> long       S -> String
R = f+d -> double
R = S+C -> String
*/
String s = "5";
char c = 'k'; // ascii code is 107
int a =  8;
String b = s+c;
int C = a+c;
System.out.println(C);
System.out.println(b);
byte n= 12;
byte p= 12;
// byte q = n+p; // this will show error as output is int 
int q = n+p ;
System.out.println(q);
    }
}