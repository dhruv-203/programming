#include<stdio.h>
#include"header.h"
int main()
{
header();
int num[10], large=0, small=0;
for(int i=0;i<10;i++)
{
printf("Enter %d Number: ", i+1);
scanf("%d", &num[i]);
if(large<num[i])
large=num[i];
if(i==9)
printf("The Largest number: %d\n", large);
if(i==0)
small=num[0];
if(num[i]<small)
small=num[i];
if(i==9)
printf("The Smallest number: %d\n", small);









}











return 0;
}
