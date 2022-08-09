#include<stdio.h>
int main()
{
/*
= :- it assings the evaluation of the right hand side to the variable on the left side 
*=,/=,-=,+=,&=,|=,^= 



*/
int a,b;

// =

b=3;
a=b;

printf("a = %d and b= %d\n", a, b);

// *=

printf("a*=b: %d\n", a*=b);
printf("a = %d \n", a);

// /=

printf("a/=b: %d\n", a/=b);
printf("a = %d\n", a);

// -=

printf("a-=b: %d\n", a-=b);
printf("a = %d\n", a);

// +=

printf("a+=b: %d\n", a+=b);
printf("a = %d\n", a);

// &=

printf("a&=b: %d\n", a&=b);
printf("a = %d\n", a);

// |=

printf("a|=b: %d\n", a|=b);
printf("a = %d\n", a);

// ^=

printf("a^=b: %d\n", a^=b);
printf("a = %d\n", a);


return 0;
}
