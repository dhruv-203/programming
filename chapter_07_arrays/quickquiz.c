#include<stdio.h>

int main()
{
int ar[5]={45,65,98,32,78} ;
float arr[4]={45.2,45.6,78.9,54.12} ;
int *a;
float *b;
a=&ar[0]; b=&arr[0];
printf("addition of a number to a pointer \n\n");
printf("%u \n\n", a);
printf("%u \n\n", b);
a+=1;
b++;
printf("%u \n\n", a);
printf("ar[1]=%d \n\n", *a);
printf("arr[1]=%f \n\n", *b);



return 0;
}