#include<stdio.h>
#include<math.h>
int main()
{
double side, area ;
printf("enter the side = ");
scanf("%lf", &side);

printf("the area of square with side %lf is %f ", side, pow(side,2));
return 0;
}