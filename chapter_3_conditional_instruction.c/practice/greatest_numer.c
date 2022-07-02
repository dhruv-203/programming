// write a program which tells the greatest number among the four numbers entered by user
#include<stdio.h>

int main()
{
int a, b, c, d;
printf("enter a number \n\n");
scanf("%d", &a);
printf("enter a number \n\n");
scanf("%d", &b);
printf("enter a number \n\n");
scanf("%d", &c);
printf("enter a number \n\n");
scanf("%d", &d);
if(a>b&&a> c&& a> d){
    printf("%d is the greatest number \n", a);
}
else if(b>a&&b> c&&b> d){
    printf("%d is the greatest number \n", b);
}
else if (c>a&&c> b&&c> d){
    printf("%d is the greatest number \n", c);
}
else if (d>a&&d>b&&d> c){
   printf("%d is the greatest number \n", d);
}
else {
    printf("you have entered all equal numbers you smart motherfucking dumbass\n");
}
return 0;
}