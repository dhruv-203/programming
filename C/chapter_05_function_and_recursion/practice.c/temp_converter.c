//function to convert the temperature from celsius to fahrenheit 
//f=c*(9/5)+32
#include<stdio.h>
float convert(float t);
int main()
{
float t ;
 printf("enter the temperature in celsius to convert it into fahrenheit :- ");
 scanf("%f", &t);
 convert(t);
return 0;
}
float convert(float t){
   
     printf("the temperature in Fahrenheit is %f ", t*9/5+32);
    return 0;
}