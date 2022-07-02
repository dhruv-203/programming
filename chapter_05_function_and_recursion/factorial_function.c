#include<stdio.h>
// example recursive func is factorial
int factorial(int n); // here n is the m-1 of the number entered 
int main()
{
int m;

 factorial(m);

return 0;
}
int factorial(int n){
printf("enter the number of which you want the factorial :- ");
scanf("%d", &n);
int f, result=1;
for(f=1;f<=n;f++){
    result*=f;
}
if(n==0){
   printf("the value of 0! = 1");
}
else{
    printf("the value of %d! = %d", n, result);
}
return result;
}