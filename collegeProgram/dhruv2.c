#include<stdio.h>
int func(int *num)
{
*num = *num / 2;
return 0;
}
int main()
{
int num=6;
func(&num);
printf("%d", num);












return 0;
}
