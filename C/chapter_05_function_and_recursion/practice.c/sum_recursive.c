//a recursive function to calculate the sum of first n natural number 
#include<stdio.h>
int sum(int n);
int main()
{
int n ;
printf("enter the number upto which you summation :- ");
scanf("%d", &n);
printf(" the sum of first %d natural number  = %d", n, sum(n));

return 0;
}
int sum(int n){
   int total=0;
    if(n>1){
        total = n+sum(n-1);
        return total;
    }
    else{
        return 1;
    }
}