#include<stdio.h>

int main()
{
for(int i=1;i==1;scanf("%d", &i))
{
int choice, a, b; // calculator to give operation b/w two integers
printf("Enter the 1 for Addition of two number\n");
printf("Enter the 2 for Subtraction of two number\n");
printf("Enter the 3 for Multiplication of two number\n");
printf("Enter the 4 for Division of two number\n");
printf("Enter the 5 for remainder of two number\n");
printf("Enter Your Choice: ");
scanf("%d", &choice);
printf("Enter the two Numbers for which you want Operation\n");
printf("First Number: ");
scanf("%d", &a);
printf("Second Number: ");
scanf("%d", &b);
switch (choice)
{
case 1 :
printf("The Additon of %d and %d is %d\n", a, b, a+b);
break;
case 2 :
printf("The Subtraction of %d and %d is %d\n", a, b, a-b);
break;
case 3 :
printf("The Multiplication of %d and %d is %d\n", a, b, a*b);
break;
case 4 :
printf("The Divison of %d and %d is %.2f\n", a, b, (float)a/b);
break;
case 5 :
printf("The Remainder of %d/%d is %d\n", a, b, a%b);
break;
}
printf("Enter 1 to do the operations again and 0 to terminate the calulator ");
}
return 0;
}
