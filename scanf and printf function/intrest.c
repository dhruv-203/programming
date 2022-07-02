#include <stdio.h>
int main()
// program for calculating simple intrest by user input
{
    float p, r, t;
    printf("enter the value of principal amount ");
    scanf("%f", &p);
    printf("enter the value of rate of intrest ");
    scanf("%f", &r);
    printf("enter the value of time period for which the loan is taken ");
    scanf("%f", &t);
    printf("the simple intrest the given time period will be %f", (p * r * t)/100);

    return 0;
}