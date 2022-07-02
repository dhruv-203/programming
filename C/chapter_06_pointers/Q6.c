//  try Q3 using call by value and verify that it dosent change the value of the said variable 


#include<stdio.h>
void multiplier(int a){
   a = 10* a;
}
int main()
{
int a ;
printf("enter the value of a = ");
scanf("%d", &a);
multiplier(a);
printf("the new value of a = %d\n\n", a); 
printf("the value of a remains same since the copy of the variable's value is passed and change in copy doesn't change original");
return 0;
}