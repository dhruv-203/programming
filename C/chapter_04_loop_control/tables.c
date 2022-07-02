//write a program to print multiplication table of a given n numbers
#include<stdio.h>

int main()
{
int n, num=1;
printf("\n\nenter the number of which you want the multiplication table :- ");
scanf("%d", &n);
while(num>=1&&num<=10){
    printf("%d times %d is equal to %d\n", n, num, n*num);
    num++;
} 
// program to get multiplication table of 10 in reverse order 
n=10, num=10;
for(num;num;num--){
    printf("\n\n%d times %d is equal to %d \n", n, num, n*num);

}

return 0;
}