#include<stdio.h>

int main()
{
int i=56 ;
int *j=&i;

printf("the add of i =%u\n", &i);
printf("the add of i =%u\n", j);
printf("the add of j =%u\n", &j);
printf("the value of i =%u\n", *(&i));
printf("the value of i =%u\n", *j);
printf("the value of j = the add of i = %u\n", *(&j));
printf("the value of i =%u\n", i);

return 0;
}