#include<stdio.h>//this is combine program to print nth fibonaaci number and upto n fibonaaci number
int fibo(int n)
{
if (n==1)
return 0;
if (n==2)
return 1;
return fibo(n-1)+fibo(n-2);
}
int main()
{
int num,cont;
printf("press 1 for nth term and press 0 for upto n terms: ");
scanf("%d", &cont);
if(cont==1)
{
printf("Enter the number: ");
scanf("%d", &num);
printf("the %dth Fibonaaci number: %d\n", num, fibo(num));
}
if(cont==0)
{
for(int i=1;i<=num;i++)
{printf("%d\n", fibo(i));}
}




return 0;
}
