#include<stdio.h>
void printstars(int n);
int main()
{
int n ;
printf("enter the number of the lines you wanted to print :- ");
//example for n=3 the output should be :-
// *
// ***
// *****
// n                    no of stars
// 1                        1
// 2                        3
// 3                        5
// n                      (2n-1) stars          [formula to get nth odd number]
scanf("%d", &n);
for(int i =0;i<=n;i++)
{
    printstars(i);
}
return 0;
}
void printstars(int n){
    for(int i=1;i<=(2*n-1);i++){
        printf("*");
    }
    printf("\n");
}