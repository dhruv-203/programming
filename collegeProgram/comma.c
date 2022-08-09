#include<stdio.h>
int main()
{
/* comma operator is used 
to intialise the multiple variables of the same type using comma operator
 to bifercate b/w more than two arguments in the closed brackets example:- printf("%d %d", a, b)
to use multiple expressions seprated by the comma example i = (j=5, j+45)




*/
int i, j;
i=(j=8,j+=85);
printf("%d\n", i);
}
