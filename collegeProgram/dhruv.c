#include<stdio.h>
int main()
{
int a[6]={1,2,3,4,5};

int *add;
for(int i=0;i<5;i++)
{
add = &a[i];
printf("%d: ", a[i]);
printf("%x\n", add);
}
printf("\n");

char *dda;
char d[11]="dhruvpatel";
for(int j=0;j<10;j++)
{
dda = &d[j];
printf("%c: ", d[j]);
printf("%x\n", dda);
}






return 0;
}
