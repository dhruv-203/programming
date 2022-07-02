#include<stdio.h>
int sum(int a, int b);
int main()
{
int c, a, b;
printf("enter the first number of which you want the addition:- ");
scanf("%d", &a);
printf("enter the second number of which you want the addition:- ");
scanf("%d", &b);
sum(a, b);// assing c to function calling not the result because function will return the value not result

return 0;
}
int sum(int a, int b){
    int result;
    result = a+b;
    printf("the sum is %d", result);
    return 0;
}