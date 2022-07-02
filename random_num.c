// write a program to genrate a random number
#include<stdio.h>
#include<stdlib.h>
#include<time.h>
int main()
{
srand(time(0));    
int number;
number = rand()%100+1;// if you want range 1-n then take remainder from dividing rand()/n which will always 
// be less than n and then add 1 incase remainder is zero than adding one will it 1
printf("the number is %d", number);
return 0;
}