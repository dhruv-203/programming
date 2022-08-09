#include<stdio.h>
#include"header.h"

int main()
{
header();
int num1,num2;
printf("Enter a Number: ");
scanf("%d", &num1);
printf("Enter a Number: ");
scanf("%d", &num2);
printf("1st Number before Swapping = %d\n", num1);
printf("2nd Number before Swapping= %d\n", num2);
swap(num1,num2);
return 0; 
}



void swap(int a,int b)
{
int tmp;
tmp = a;
a=b;
b=tmp;
printf("1st Number After Swapping = %d\n", a);
printf("2nd Number After Swapping= %d\n", b);
}
