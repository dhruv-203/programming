// program using recursion to calculate nth element  of fibonacci series and  sum upto n terms (extra)
#include <stdio.h>
int term(int n);
int sum(int n);
int main()
{
    int n;
    printf("enter no of the term you want from fibonacci series :- ");
    scanf("%d", &n);

    if (n == 2 || n == 1)
    {
        printf("the %dth term = %d", n, term(n));
    }
    else if (n <= 0)
    {
        printf("please enter a valid no.");
    }
    else
    {
        printf("the %dth term = %d", n, term(n));
    }
    sum(n);
    return 0;
}
int term(int n)
{
    int x, sum = 0, y;
    if (n > 2)
    {
        x = term(n - 1) + term(n - 2);
        return x;
    }
    else if (n == 2)
    {
        return 1;
    }
    else if (n == 1)
    {
        return 0;
    }
}
int sum(n)
{
    int sum = 0, y;
    for (y = 1; y <= n; y++)
    {
        sum += term(y);
    }
    printf("the sum of first %d terms of the fibonacci series = %d", n, sum);
}