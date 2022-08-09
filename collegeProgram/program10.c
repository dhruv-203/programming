#include<stdio.h>
#include"header.h"
int main()
{
header();
int i;
printf("Enter the Number to Check if its Divisible by 3 :- ");
scanf("%d", &i);
if(i%3==0)
{
printf("%d is Divisible by 3\n", i);

}
return 0;
}
