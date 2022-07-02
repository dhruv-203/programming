#include <stdio.h>
int main()
{
    float a, b, c;
    printf("enter any three numbers to get the addition of first two numbers and then the subtraction of third \n");
    printf("enter the value of a ");
    scanf("%f", &a);
    printf("enter the value of b ");
    scanf("%f", &b);
    printf("enter the value of c ");
    scanf("%f", &c);
    printf("the ansser is %f", a + b - c);

    return 0;
}
/* in oder to get the user input we use scanf function 
syntax for scan function :-
scanf("operator specifier", &variable_name)
operator specifier are 
%d :- for specifying interger constant
%f :- for specifying real constant 
%c :- for specifying the character constant 
%s :- for long sentences which have more than one char 
      to do that use char variable_name[] ;
%lf :- for double datatype      
in double and float we choose upto how decimals we want our output 
like %.1f means upto one place decimal 
that is if the output is 98.0859 then it will print 98.1 rounded up  
----> & this symbol is 'addresses of' operator i,e the value input by user is addressed to the variable written next to it    
*/