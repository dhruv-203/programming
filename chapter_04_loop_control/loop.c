/*
why loop ?
sometimes we want our program to execute few set of instruction over and over again for example:-
printing numbers 1 to 100 or printing first 100 even numbers

hence loops make it easy for a programmer to tell computer that a given set of instruction must be executed repeatedly

===> types of loop 
primarily there are three types of loop in C language 
1. while loop 
2. do-while loop
3. for loop


we will see each of them one by one 

*/

// while loop
/*
syntax 
while (condition)
{
     code ;                     code return in this block will execute again and again as long as condition is true;
}

note if the condition is never false then it will become an infinite loop and keep getting executed 
 
====>   DO-WHILE LOOP   <======
the syntax is 
do{
    code;

}while(condition);


do-while loop works similarly to while loop 
there is just one difference b/w them 
while --> checks the condition first and then executes the code till the condition is true 
do-while --> executes the code then checks the condition 
means if the condition input doesn't match with the condition in while 
then also the code will executes for once then since the condition is false it will stop executing further 

do-while loop is equal to a while loop which executes atleast once

=====> FOR LOOP <======

the syntax is 
for (initialize;condition; increment/decrement)
{
    code ;
}

initialize means setting a loop counter to an initial value




-------->note increment is always applied at last after entering all reapeating condition<-------------
*/
#include<stdio.h>

int main()
{
// program to print all the leap years till now
int year = 1;
printf("following are all the leap years till 2021 \n\n");
while(year>=1&&year<=2021){
    if(year%4==0&&(year%400==0||year%100!=0)){
        printf( "%d \n\n", year);
    }
    year++;
    
}
int num=0;
printf("\n\n\n\n\nfollowing are even numbers:- \n");
while(num>=0&&num<=200){
    (num%2==0)?printf("%d",num):printf("\n\n");
    num++;
}
do
{
    printf("\n\n\ndhruv\n\n\n");
    num++;
} while (num==300); // since the condition returns false it will executes it only once

// write a program to print first n natural numbers using for loop where is decided by user




int n, no;
printf("enter the last term upto which you want natural numbers to be printed :- ");
scanf("%d", &n);
printf("\n\n");
for ( no = 1; no<=n ; no++)
{
    printf("%d\n", no);
}


return 0;
}