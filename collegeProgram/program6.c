#include<stdio.h>
#include"header.h"
int main()
{
header();
printf("-------------------------------------------------------\n");
printf("                   Area Of Circle \n");                      
printf("-------------------------------------------------------\n");

 
float rad, pi = 3.14, area;
printf(" Enter the value of radius of the circle :- ");
scanf("%f", &rad);
area = pi*rad*rad;
printf(" The area of the circle = %.2f\n", area);


printf("-------------------------------------------------------\n");
printf("                 Area Of Rectangle  \n");                      
printf("-------------------------------------------------------\n");

float L, B;
printf(" Enter the value of the length of the rectangle :- ");
scanf("%f", &L);
printf(" Enter the value of the breadth of the rectangle :- ");
scanf("%f", &B);
area = L*B;
printf("The area of the rectangle = %.2f \n", area);


printf("------------------------------------------------------- \n");
printf("                  Area Of Sphere   \n");                      
printf("-------------------------------------------------------\n");


printf(" Enter the value of radius of the spehre :- ");
scanf("%f", &rad);
area = 4*pi*rad*rad;
printf(" The area of the spehre = %.2f\n", area);




return 0;
}
