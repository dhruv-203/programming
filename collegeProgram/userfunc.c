#include<stdio.h>

int my(int x)
{
x++;
return x;
}
int main()
{
int i=10,x;
x=my(i);
printf("%d\n", my(i));
printf("%d\n", x);
return 0;
}

