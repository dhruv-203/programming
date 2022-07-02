// write a program having a variable i print the address if i 
//pass this variable to a function and print its address are this address are same, why?
#include<stdio.h>
void printadd(int a)
{
    printf("the address of a is %u\n\n", &a);
    return;
}
int main()
{
int i ;
printf("the of address of a = %u\n\n", &i);
printadd(i);
return 0;
}
/*
now the addresses of the variable in main() and the other one is not same because the func we define void one contain 
a variable as parametre which takes the copy of the value provided by the variable in main() therefore two different 
variables stored at different address in memory 

*/