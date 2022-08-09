#include<stdio.h>
#include"header.h"
int main()
{
header();
int n;
for(int i=1;i<=3;i++)
{
for(n=1;n<11;n++)
{
printf("%d X %d = %d\n", i, n, i*n);
}
printf("\n\n");
}










return 0;
}
