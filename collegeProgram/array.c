#include<stdio.h>
int main()
{
int a[5];
for(int i=0;i<5;i++)
{
printf("Enter a %d number: ", i+1);
scanf("%d", &a[i]);
}
for(int j=0;j<5;j++)
{
printf("the %d number is: %d\n", j+1, a[j]);
}





return 0;
}
