#include<stdio.h>
void printpattern(int n);
int main()
{
int n ;
printf("enter the no. of lines you wanted to print :- ");
scanf("%d", &n);
printpattern(n);
return 0;
}
//example for n=3 the output should be :-
// *
// ***
// *****
// n                    no of stars
// 1                        1
// 2                        3
// 3                        5
// n                      (2n-1) stars          [formula to get nth odd number]

void printpattern(int n){
if(n==1){
    printf("*\n");
    return;
}
printpattern(n-1);
for(int i = 1;i<=(2*n-1);i++){
    printf("*");
}
printf("\n");
}