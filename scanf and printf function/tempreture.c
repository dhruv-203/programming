#include <stdio.h>
// a program to convert the celsius into fahrenheit
int main()
{
    float t; //t is variable for the temperature
    printf("enter the temperature in celsius to convert it into fahrenheit ");
    scanf("%f", &t);
    printf("the temperature in Fahrenheit is %f ", t * 9 / 5 + 32);
    return 0;
}