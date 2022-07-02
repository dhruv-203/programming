// write a program using a function which calculate the sum and average of two numbers use pointers 
// and print the value of sum and average in main()
#include<stdio.h>
void sum(int *total, int a, int b);
// void average(int a, int b, float *result){
// *result = (a+b)/2;
//   printf("\n\nthe average of %d and %d = %f ", a, b, *result);
//   return ;
// } this will be wrong it wont show error but the output will not be true because 2 is integer and a+b will also give 
// integer and the integer/integer will return an integer therefore one of them from a or b need to be float 
// we can do type casting also which simply means to change type temporarily the lvalue must have the same data type to type cast 
void average(int a, int b, float *result){
*result = (float) (a+b)/2;
  printf("\n\nthe average of %d and %d = %.2f ", a, b, *result);
  return ;
}
int main()
{

int a,b, total;
float result;
printf("enter the two numbers to get the sum and average :- \n\n\n");
printf("enter the first number :- ");
scanf("%d", &a);
printf("enter the second number :- ");
scanf("%d", &b);
sum(&total, a, b );
average(a, b, &result);


return 0;
}
void sum(int *total, int a, int b)
{
    *total=  a+b;
    printf("the sum %d+%d=%f", a, b, *total);
    return ;
}