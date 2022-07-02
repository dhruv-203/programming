//function to get average of any three numbers
#include<stdio.h>
float average(float a, float b, float c);
int main()
{
float a, b, c ;
printf("enter the first number :- ");
scanf("%f", &a);
printf("enter the second number :- ");
scanf("%f", &b);
printf("enter the third number :- ");
scanf("%f", &c);
average(a,b,c);
return 0;
}
float average(float a, float b, float c){
    float d;
    d=(a+b+c)/3;
    printf("the average of %f,%f,%f is = %f", a, b, c, d);
    return 0;
}
