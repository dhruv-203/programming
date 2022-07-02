// write a program to print the value of the variable i by using pointer to pointer variables
#include<stdio.h>

int main()
{
int i =6 ;
int *b = &i;
int **c = &b;
printf("the value of a = %d", **c); 
return 0;
}