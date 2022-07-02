#include<stdio.h>
// example recursive func is factorial
int factorial(int n); // here n is the m-1 of the number entered 
int main()
{
int m, answer ;
printf("enter the number of which you want the factorial :- ");
scanf("%d", &m);
answer = factorial(m);
printf("the value m! = %d", answer);
return 0;
}
int factorial(int n){
int f;
if(n>0){
    f=n*factorial(n-1);
    return f;
}
else if(n==0)
{return 1;}
// SECOND METHOD BUT IT WON'T BE REGARDED AS RECURSIVE METHOD
//because recursion means function calling itself which can't be seen here
// int f, result=1;
// for(f=1;f<=n;f++){
//     result*=f;
// }
// if(n==0){
//    return 1;
// }
// return result;
}