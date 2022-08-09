#include<stdio.h>
int main()
{
int i = 10;
printf("%d\n", i);
{
// whatever we write in this curly braces it will remain hide i.e. a new memory location will be declared by the compiler as coumpound satement 

int i = 20;
printf("%d\n", i);
{
int i = 40;
printf("%d\n", i);
}




}

printf("%d\n", i);
return 0;



}
