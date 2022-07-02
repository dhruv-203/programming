#include<stdio.h>
void gm();// this is best example to explain indirect calling for a function 
// on calling only one function the other two are indirectly called
void ga();
void gn();

int main()
{
int a ;
printf("function initialising function\n");
gm();

printf("function finished its work");
return 0;
}
void gm(){
    printf("good morning\n\n");
    ga();
}
void ga(){
    printf("good afternoon\n\n");
    gn();
}
void gn(){
    printf("good night\n\n");
}