/*
calculate income tax paid by an employee to the government as per the stats mentioned 
income slab                             tax
2.5 lac - 5.0 lac                       5%
5.0 lac - 10.0 lac                      20%
above 10.0 lac                          30%

note that there is no tax below 2.5L take income amount from the user 



*/

#include <stdio.h>

int main()
{
    int income;
    float tax = 0;
    printf("enter your annual income \n");
    scanf("%d", &income);
    switch (income)
    {
    case 250000 ... 500000:
        printf("the tax you paid is %f \n", 0.05 * (income - 250000));
        break;
    case 500001 ... 1000000:
        printf("the tax you paid is %f \n", 0.2 * (income - 500000));
        break;

    default:
        break;
    }
    if (income > 1000000)
    {
        printf("the tax you have to pay is %f \n", 0.3 * (income - 1000000));
    }
    else if (income < 250000)
    {
        printf("since your income below you don't have the tax \n\n\n\n");
    }
    // method 2
    if (income >= 250000 && income <= 500000)
    {
        tax = tax + ((income - 250000) * 5) / (100);
        printf("the tax you have to pay is %f\n", tax);
    }
    else if (income > 500000 && income <= 1000000)
    {
        tax = tax + ((income - 500000) * 20) / (100);
        printf("the tax you have to pay is %f\n", tax);
    }
    else if (income > 1000000)
    {
        tax = tax + ((income - 1000000) * 30) / (100);
        printf("the tax you have to pay is %f\n", tax);
    }
    else if (income < 250000)
    {
        printf("since your income below you don't have the tax \n\n\n\n");
    }
    return 0;
}