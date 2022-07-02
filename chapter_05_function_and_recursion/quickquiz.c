#include<stdio.h>
void gm();
void ga();
void gn();

int main()
{
int a ;
printf("function initialising function\n");
gm();
ga();
gn();
printf("function finished its work");
return 0;
}
void gm(){
    printf("good morning\n\n");
}
void ga(){
    printf("good afternoon\n\n");
}
void gn(){
    printf("good night\n\n");
}