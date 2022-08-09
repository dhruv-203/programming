#include<stdio.h>
#include"header.h"
int main()
{
header();
int age, y;
printf("Enter Your Age :-");
y = scanf("%d", &age);

if(y==1)
{
printf("You have lived for %d Seconds \n ", age*365*24*60*60);
}
else
{
printf("You have Entered Wrong Age \n");
}





return 0;
}
