#include<stdio.h>
int main()
{
int a=2;
int b=5;
float c = b/a;
printf("%f\n", c);
// even though we have created the variable of float data type but the result of the arithematic operation b/w any two int data types will return int and save it as float thats why here answer will be 2.000000 instead of 2.40000
 c = (float) b/a; 
printf("%f\n", c);
}
