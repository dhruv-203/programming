#include<stdio.h>
//write a program to print the address of a variable
// and then use this address to get the value of the variable
int main()
{
int a=9 ;
int *b;
b=&a;
printf("the address of a variable is =%u \n the value of variable a = %d", b , *b);
return 0;
}