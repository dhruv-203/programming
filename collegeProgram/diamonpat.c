#include<stdio.h>
int main()
{
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
tmp=num-1;
for(int x=2;x<=num;x++)
{
for(int y=1;y<=x;y++)
{printf(" ");}
for(int z=(tmp*2)-1;z>0;z--)
{printf("*");}
tmp--;
printf("\n");
//incomplete



}





return 0;
}













