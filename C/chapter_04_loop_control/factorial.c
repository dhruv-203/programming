// write a program to calculate the factorial of a given number using a for loop
#include<stdio.h>
// n factorial is the product of all precceding number with n ex 5!=5*4*3*2*1=120 
int main()
{
int factorial, n, x;
printf("enter the number of which you want the factorial :- ");
scanf("%d", &n);

if(n!=0){
x=n;
for(factorial=1;x;x--){
    factorial*=x;
}
printf("\n\n\nthe factorial of %d! = %d\n\n\n", n, factorial);
printf("we will do same shit with while loop\n\n\n ");
x=n; factorial=1;
while(x){
   factorial*=x ;
   x--;
}
printf("\n\n\nthe factorial of %d! = %d\n\n\n", n, factorial);
printf("we will do same shit with do-while loop\n\n\n ");
x=n, factorial=1;
do{
    factorial*=x ;
    x--;
}while(x);
printf("\n\n\nthe factorial of %d! = %d\n\n\n", n, factorial);
}
else { 
    printf("the factorial of 0! = 1");
}
   
 printf("thankyou for programming with us");
return 0;
 }
