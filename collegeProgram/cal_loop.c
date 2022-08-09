#include<stdio.h>

int main()
{
for(int i=1;i==1;scanf("%d", &i))
{
char choice;
int  a, b; // calculator to give operation b/w two integers
printf("Enter the A for Addition of two number\n");
printf("Enter the S for Subtraction of two number\n");
printf("Enter the M for Multiplication of two number\n");
printf("Enter the D for Division of two number\n");
printf("Enter the R for remainder of two number\n");
printf("Enter Your Choice: ");
scanf("%c", &choice);
printf("Enter the two Numbers for which you want Operation\n");
printf("First Number: ");
scanf("%d", &a);
printf("Second Number: ");
scanf("%d", &b);
switch (choice)
{
case 'A' :
printf("The Additon of %d and %d is %d\n", a, b, a+b);
break;
case 'S' :
printf("The Subtraction of %d and %d is %d\n", a, b, a-b);
break;
case 'M' :
printf("The Multiplication of %d and %d is %d\n", a, b, a*b);
break;
case 'D' :
printf("The Divison of %d and %d is %.2f\n", a, b, (float)a/b);
break;
case 'R' :
printf("The Remainder of %d/%d is %d\n", a, b, a%b);
break;
}
printf("Enter 1 to do the operations again and 0 to terminate the calulator ");
}
return 0;
}
