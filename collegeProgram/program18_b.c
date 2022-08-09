#include<stdio.h>
#include"header.h"
int main()
{
header();
int num;
printf("Enter the Number of lines for which you want pattern: ");
scanf("%d", &num);
for(int i=1;i<=num;i++)
{
for(int j=1; j<=i;j++)
{
printf("%d", j);
}

printf("\n");
}









return 0;
}
