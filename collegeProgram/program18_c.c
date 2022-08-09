#include<stdio.h>
#include"header.h"
int main()
{
header();
int num,tmp;
printf("Enter the Number of lines for which you Pattern: ");
scanf("%d", &num);
tmp = num;
for(int i=1;i<=num;i++)
{
for(int j=tmp;j>0;j--)
{
printf(" ");
}
tmp--;
for(int k=1;k<=(i*2)-1;k++)
{
printf("*");
}
printf("\n");


}






return 0;
}
