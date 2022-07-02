#include <stdio.h>
int sum(int a, int b);
int main()
{
    int x = 5, y = 6;
    printf("the value of %d+%d=%d\n", x, y, sum(x, y));
    printf("the value of x = %d and y = %d\n", x, y);
    return 0;
}
int sum(int a, int b)
{

    a = 50; // by changing values of a and b here won't affect the original values of x and y in main even after
    b = 50; // the execution of the function however changing value here might affect the summation final result but individual values of
            // x and y will remain same in main
    int c = a + b;
    return c;
}