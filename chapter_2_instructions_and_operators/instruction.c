// CHAPTER 2 :- INSTRUCTION AND OPERATORS

#include <stdio.h>
#include <math.h>

int main()
{
    /*types of instruction :-
1.> type declaration 
2.> arithematic instruction 
3.> control instruction 
** type declaration instruction 
int a;
float b;
are example of type declaration  
*/
    int i = 10;
    int j = 56;
    int a = 65;
    int b = (i * a) + j;
    printf("%d \n", b);
    int f = 56;
    int k = f + 45; // this is valid
    /* but
 int k=f+45; int f=85; is not valid 
 since compiler compiles the program in oder linewise and 
stop compiling the rest on occurance of first error
*/
    /*
** arithematic operators 
this are addition(+), substraction(-), multiplication(*), division(/) ;
example:- int I = (8*9)-5;
so here 8,5,9 are operands 
and *,- are operators 
*/
    int I = (8 * 9) - 5;
    printf("%d \n", I);
    int z;
    z = b * a; // is valid
    printf("%d \n", z);
    // but a*b=z; is not valid
    /*
    because'=' is an assignment operator which has some rule
    lvalue                           =                  rvalue   
    the entity on the left side                  the role of entity on on right 
    stores the value of the entity              is to get store in the left side 
    mentioned on the right side                 lvalue must a variable always which can store the value 
since a*b is not a variable as returns a constant value therefore it shouldn't be on left side
*/
    /*
    ---> modular division function (%)
    this operator gives the remainder of two numbers when they are divided 
    example:- when 5 divided by 2 i,e 5/2 leaves remainder 1
    so to create a program which gives the remainder we use this func in printf  
    **note:- i) this operator can't be applied on the float (i,e can't be used for real constants);
             ii) sign is same as dividend the sign of divisor dosen't affect the sign of the final answer 
                (5/2 so here 5 is dividend and 2 is divisor);
              
    */
    int A, B; // A program which takes the user input for dividend and divsor and returns the remainder
    printf("enter the dividend(numerator) \n");
    scanf("%d", &A);
    printf("enter the divisor(denominator)  \n");
    scanf("%d", &B);
    printf("the remainder is %d \n", A % B);
    /*
    **note:-
    i} operators in C language are fixed  
    ex:- int i = ab; is invalid to get the product of a and b and also 
        the compiler will assume it as a variable 
        therefore to get the product of a and b we have to use a*b 
   =======> ii} there are no operator which performs the exponentiation(power) 
        however, to do so we can use pow(x,y) [this returns as x power to y] from math.h
        i,e we have first write #include<math.h> along with #include<stdio.h>
      
    */
    int X, Y; // a program which gives you exponentiation of two numbers from user input
    printf("enter base \n");
    scanf("%d", &X);
    printf("enter the power \n");
    scanf("%d", &Y);
    printf("%d to the power %d = %f \n", X, Y, pow(X, Y));
    //=========> ****** so consider you need to print a combination of datatypes  in printf ******** <=========
    char name[] = "rahul dravid";
    char country[] = "India";
    printf("the wall %s is a great player from %s \n", name, country);
    /*
    ===>type conversion 
    an arithematic operation b/w 
    i) int and int returns int 
    ii) int and float returns float 
    iii) float and float returns float 
    */
    float E = 5 / 2; //example :-
                     // instead of 2.5 the answer will be 2 evenif we marked E in float operator
    printf("%f \n", E);
    // therefore to get the right answer we have to use float and int combination
    float F = 5.0 / 2;
    printf("%f \n", F); // now we will get right answer 
    // ========> operator precedence in C Language
    /*
    if we write 
    3*x-8*y then the answer will be evaluted on the basis of fixed priority not on the basis of the of BODMAS 
    the answer to the above expression can be given by operator precedence and associativity
    priority table:-
    priority                            operator
        1                               * , / , %   
        2                                 + , -
        3                                   =
        operator of the higher priority are evaluted first in the "absence of the parenthesis"
    */
    int u = 8, v = 6, P = 3 * u - 8 * v; // multiplication has higher priority so both 3*u and 8*v took place together
    // and then the substraction take place
    printf("%d \n", P);
    // now consider expression to be 8*v/3*u so according to the simple maths answer sholud be 2 (48/24)
    printf("%d \n", 8 * v / 3 * u);
    // here comes the associativity in play
    // when operators of the eqyual priority are present in an expression the tie is taken care by associativity
    // ex:- x*y/z ===> (x*y)/z
    // ex:- x/y*z instead of x/(y*z) it will perform the operation from left to right associativity
    // like this (x/y)*z
    // --> note :- * , / follows left to right associativity
    // therefore in above expression 8*v/3*u the operation takes place like
    // (8*v)/(3)*(u) = (8*6)/(3)*(8) = (48/3)*8 = 16*8 = 128

    /*
  =====> CONTROL INSTRUCTION 
  determines the flow of control in a program  there are four types of intructions
  i) sequence control instruction (up to down following pattern)
  ii) decision control instruction (if else statement)
  iii) loop control instruction (for loop, while loop etc)
  iv) case control instruction 
  */

    // all these concepts are in the upcomming parts of the notes this is the end of the chapter 2

    return 0;
}