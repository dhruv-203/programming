//Q1 what will be the output of the program
// int a=10;
// if (a=11){
// printf("a=11\n");
// }
// else{
// printf("i am not 11\n");
// }
// answer is if statement will print since we are assigning a non-zero to a in condition part
// as we know a non-zero value in C is always considered as true thus if will print


#include <stdio.h>
//Q2 write a program to find out whether a student is pass or fail if it requires total
//40% and 33% in each subject to pass assume any three subjects and take as an input from the user
int main()
{
    // Q2 answer
    float maths, sci, eng; // the total percent must be greater than 40% and atleast 33% in each subject
    float percent;
    printf("enter the marks obtained in the maths out of 80\n");
    scanf("%f", &maths);
    printf("enter the marks obtained in the sci out of 80\n");
    scanf("%f", &sci);
    printf("enter the marks obtained in the eng out of 80\n");
    scanf("%f", &eng);
    percent = ( (eng + maths + sci)*100) / (240);

    if (100 * eng / 80 >= 33 && 100 * maths / 80 >= 33 && 100 * sci / 80 >= 33 && percent >= 40)
    {
        printf(" you have obtained %f percentage \n you're passed \n", percent);
    }
    else
    {
        printf("percent = %f \n", percent);
        printf(" sorry you're failed \n the required total percent to pass is 40 and 33 percent marks in each subject \n try harder next year\n");
    }
    //Q3.

    return 0;
}