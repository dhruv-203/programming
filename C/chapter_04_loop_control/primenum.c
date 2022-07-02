#include<stdio.h>

int main()
{
int n, x=2, prime=0 ;
printf("\n\nenter the number to check whether it is prime number or not :-");
scanf("%d", &n);
for (x=2;x<n ; x++)
{
    if (n%x==0)
    {
      printf("\n\n\n%d is not a prime number \n\n", n);
      prime=0;
     break;
    }
    else{
        prime=1;
    }
   
    
}
if(n==2||prime==1){
    printf("\n\n\n%d is prime number\n\n ", n);
}
 
 printf("\n\n\n same shit different loop\n\n\n");
 x=2; prime=0;
 while(x<n){
     if(n%x==0){
         printf("%d is not a prime number\n\n", n);
         prime=0;
         break;
     }
     prime=1;
     x++;
 }
 if(n==2||prime==1){
      printf("%d is a prime number\n\n\n", n);
 }
    
printf("\n\n\n same shit different loop\n\n\n");
x=2, prime=0;

do{
     if(n%x==0){
         printf("%d is not a prime number\n\n", n);
         prime=0;
         break;
     }
     prime=1;
     x++;
}while(x<n);
if(n==2||prime==1){
      printf("%d is a prime number\n\n\n", n);
 }

return 0;
}