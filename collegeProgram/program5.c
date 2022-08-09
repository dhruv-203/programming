#include<stdio.h>
#include"header.h"
int main()
{
header();
float temp,c;
printf("Enter the tempreture in Fahrenheit:- ");
scanf("%f", &temp);
c= (temp-32)*5/9;
printf("The tempreture in Celsius:- %.2f\n", c);
return 0;
}

