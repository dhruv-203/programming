/*
------------ SWITCH CASE STATEMENT --------------
switch statement is used when we have to a choice b/w number and the given alternatives for given variables

SYNTAX
switch(integer denoted variable)
{
    case c1:
    code;
    case c2:
    code;                       c1,c2,c3 are const assigned to int variable 
    case c3                     default statement work similarly to else statement                  
    code;                       if not any case is true then it will run 
    default:                    code ---> any valid code of C ex:- break ;used to exit the switch when one cond is true
    code;                       
}
the value of integer-expression is matched against c1,c2,c3 if it matches any of these
cases that case along with all the subsquent "case" and "default" statement are executed

*/
#include<stdio.h>
// write program which finds the grade of the students on the basis of marks
int main()
{
int marks;
printf("enter the marks you have obtained \n");
scanf("%d", &marks);
switch (marks)
{
case 80 ... 100 :
printf(" congrats you have obtained A grade \n excellent \n you are promoted to next year\n");
    break;
case 70 ... 79 :
printf("you have obtained B grade \n very good \n you are promoted to next year but work hard \n");
break;
case  60 ... 69:
printf("you have obtained C grade \n good \n you are promoted to next year but work hard \n");
break;
case 45 ... 59:
printf("you have obtained D grade \n nice \n you are promoted to next year but work hard \n");
break;
case 35 ... 44:
printf("you have obtained E grade \n poor \n you are promoted to next year but you have really work hard \n");
break;
case  0 ... 34 :
printf("you have obtained F grade \n better luck next time \n you are not promoted to next year  \n");
break;

}
return 0;
}