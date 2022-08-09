#include <stdio.h>
#include"header.h"
int main() {
header();
int num,tmp;
printf("Enter a number upto which you want Prime number: ");
scanf("%d", &num);
for(int i=2;i<=num;i++)
{
tmp=1;
for(int j=2;j<i;j++)
{
if(i%j==0)
{
tmp=0;
}
}
if(tmp==1)
{ printf("%d\n", i);  }
}
return 0;
}
