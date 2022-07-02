// CHAPTER:- 3 CONDITIONAL INSTRUCTION
/*
conditional instructions like if/else requires when a decision is based on the condition being met 
in C language we must be able to execute instruction on a condition being met
======> Decision making instruction in C
-> if-else statement 
-> switch statement

--> if-else statement 
syntax :--
if(condition to be checked){
    statement if condition is true ;
}
else{
    statement if condition is false;
}
**note:- else block is optional if doesn't write it then if the statement written in "if" block is true
then it will perform the instruction given in it otherwise it will ignore the whole  block


====> else if clause ******
instead of using multiple if statement we can also use else if along with if thus forming an
if-else if-else ladder

SYNTAX:-
if(){

}
else if(){                                                  note:- space b/w else if

}
else{

}
using if-else if-else reduces indents 
the last else is optional 
also there can be any number of else if
last else is only written for a case when all conditions are false  

---------- CONDITIONAL OPERATORS ------------

a shortcut or we can say one liner if-else statement can be written by using 
conditional operators or ternary operators

SYNTAX
(condition)?printf("statement to be print or action to be performed"):printf("statement when 'if' is false");
 
 here ? and : are ternary operators
 it is preferred to be used for only one liner conditions  


*/
#include <stdio.h>

int main()
{
    // example for if else statement
    // a program which check whether a number is divisible by 5
    int a;

    printf("enter the whose divisibility you want to check \n");
    scanf("%d", &a);
    if (a % 5 == 0 && a >= 5)
    {
        printf("the given number is divisible by 5 \n");
    }

    else
    {
        printf("the given number is not divisible by 5\n");
    }
    (a%2==0)?printf("%d is even number", a):printf("%d is odd number ", a);

    return 0;
}
// the relational operators
/*
relational operators are used to evalute the condition inside the if statement 
some example of relational operators are:-
== which used to check equality
>= greater than or equals to
<= less than or equals to
<  less than 
>  greater than 
!= not equals to
if we write single equals to '=' in the condition part of the if statement then it will always considered to be true 
unless the assing value is 0 the reason for this is in C language non-zero number is always considered to be true

*/

// logical operators
/*
&&,||,! are the three logical operators in C language these are read as "AND","OR","NOT" respectively
they are used to provide logic to our C program 

USES:-
&&  returns true if both conditions are true
    if(_ && _) [ underscore represent the condition]
|| returns true even one of the two conditions are true 
    if(_ || _)
!  it reverse the decision 
    i,e if the condition is true then it will return false vice versa
    if(!(_))    

-------- OPERATOR PRECEDENCE --------------
 priority                                       operator

 1                                                  !
 2                                               *, /, %
 3                                                 +,-
 4                                                <, >, <=, >=      
 5                                                 ==, !=
 6                                                  &&
 7                                                  ||
 8                                                  =






*/
