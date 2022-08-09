#include<stdio.h>
#include"header.h"
int main()
{
header();
int num1, num2, num3,large;
printf("Enter First Number :- ");
 scanf("%d", &num1);
printf("Enter Second Number :- ");
 scanf("%d", &num2);
printf("Enter Third Number :- ");
 scanf("%d", &num3);
large = num1;


if(large<num2)
{
large = num2;
}

if(large<num3)
{
large = num3;
}



printf("%d is Greater than the other two number\n", large );
 









return 0;


} 
