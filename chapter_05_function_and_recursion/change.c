#include<stdio.h>
int change(int b);
int main()
{
int b =56 ;
printf("before applying the function %d\n", b);
change(b);
printf("the value of b after applying the function %d", b);
return 0;
}
int change(int b){
    b=55;
    return 0;
}