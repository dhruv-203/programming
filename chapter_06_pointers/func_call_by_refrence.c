#include<stdio.h>
void wrongswap(int a, int b);
void swap(int *a, int *b);
void print();

int main()
{
int a=5, b=7 ;

printf("first we will try swaping with wrongswap function\n\n");
printf("the value of a and b before swap = %d, %d\n\n", a, b);
wrongswap(a,b);
printf("the value of a and b after swap = %d, %d\n\n", a, b);
printf("now will try with swap function\n\n");
printf("the value of a and b before swap = %d, %d\n\n", a, b);
swap(&a, &b);
printf("the value of a and after swap = %d, %d\n\n", a, b);
print();
return 0;
}
void wrongswap(int a, int b){
    int temp;
    temp=a;
    a=b;
    b=temp;
    return;
}
void swap(int *a, int *b){
    int temp;
    temp = *a;
    *a = *b;
    *b = temp;
    return;
}
void print(){
    printf("thankyou for programming with us \n\n PATEL DHRUV\n\n");
    return;
}