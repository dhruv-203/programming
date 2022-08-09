#include<stdio.h>
#include"header.h"
int main()
{
header();
float num1,num2,add;
printf("Enter the First Number:- ");
scanf("%f", &num1);
printf("Enter the Second Number:- ");
scanf("%f", &num2);
add = num1 + num2;
printf("The summation of %.2f and %.2f:- %.2f \n", num1,num2,add);


return 0;
}
