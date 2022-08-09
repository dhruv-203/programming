#include<stdio.h>
#include"header.h"
int main()
{
header();
int num, factorial=1;
printf("Enter the Number till which you want Factorial: ");
scanf("%d", &num);
if(num==0)
{
printf("%d! = 1\n", num);
}
else
{
for(int i=num;i>0;i--)
{
factorial*=i;
}
printf("%d! = ", num);
if(num==1)
{
printf("1\n");
}
else
{
for(int j=num;j>0;j--)
{

printf("%d*", j);

}
printf("= %d\n", factorial);
}
}

return 0; 
}
