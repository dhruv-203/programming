#include<stdio.h>
#include<string.h>
// using the basic fprint fscanf fputs fgets function 
void main()
{
int i;
printf("Enter the number of the students: ");
scanf("%d", &i);
char name[i][50],*ptr;
ptr = &name[0][0];
for(int x=0;x<i;x++)
{
printf("Enter the %d student Name: ", x+1);
scanf("\n%[^\n]s", name[x]);
}
FILE *iptr = fopen("dhruv.txt", "w");
for(int x=0;x<i;x++)
{
fprintf(iptr, "%s", name[x]);
fprintf(iptr, "\n");
}
}
