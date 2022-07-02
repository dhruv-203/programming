// write a program to change the value of i variable to ten times of the current value write a 
// function and pass the value by reference 
#include<stdio.h>
void multiplier(int *a){
   *a = 10* *a;
}
int main()
{
int a ;
printf("enter the value of a = ");
scanf("%d", &a);
multiplier(&a);
printf("the new value of a = %d", a); 
return 0;
}