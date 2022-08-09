#include<stdio.h>
int main()
{// bitwise 
int a,b;
a=10, b=5;
int c;
c=a&b;// bitwise and operator
printf("%d\n", c);
c=a|b;//bitwise or operator
printf("%d\n", c);
c=a^b;//bitwise xor operator
printf("%d\n", c);
c= a<<b ;
//bitwise left sweep operator here 10<<5 means in the binary of 10 the right most 5 digits will be dropped off
// i.e. binary of the 10 is 0000 0000 0000 1010
// after operation 0000 0001 0100 0000
printf("%d\n", c);

c= a>>b ;
//bitwise right sweep operator here 10>>5 means in the binary of 10 the left most 5 digits will be dropped off
// i.e. binary of the 10 is 0000 0000 0000 1010
// after operation 0000 0000 0000 0000
printf("%d\n", c);





}
