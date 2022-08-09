#include<stdio.h>
int main()
{
int num[10], small=0,tmp[10],gar,asscend[10];

for(int i=0;i<10;i++)//takes the input from user
{
printf("Enter a Number: ");
scanf("%d", &num[i]);
}
printf("Asscending Order: ");
for(int j=0;j<10;j++)//to record the smaller number and assing to original format
{
for(int x=0;x<10;x++)
{
if(x!=tmp[x])
{
small=num[x];
gar=x;
break;
}
}
for(int k=0;k<10;k++)//checks smaller number condition 
{
if(small>num[k]&&k!=tmp[k])
{
small=num[k];
gar=k;
}
}
tmp[gar]=gar;
asscend[j]=num[gar];
}
for(int z=0;z<10;z++)
{printf("%d ", asscend[z]);}
printf("\n");











return 0;
}
