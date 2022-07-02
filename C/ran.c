#include<stdio.h>

int main()
{
char name[100]  ;
printf("Enter the Name of the Student :-"); 
scanf("%[^\n]s", name);
printf("\n%s", name);
return 0;
}