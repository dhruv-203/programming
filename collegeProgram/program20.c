#include<stdio.h>
#include"header.h"
 
int fact(int n)
{
if(n==0)
return 1;

int factorial;
factorial = n*fact(n-1);
return factorial;
}
int main()
{
header();
int num;
printf("Enter the number: ");
scanf("%d", &num);
printf("The Factorial of %d is %d\n", num, fact(num));




return 0;
}
