// write a program to sum first ten natural numbers using while loop
#include <stdio.h>

int main()
{
    int n, num = 1, m, x = 2;
    printf("enter the number till which you want the summation :- ");
    scanf("%d", &n);
    while (x <= n)
    {

        m = num + x;
        num = m;
        // we can also put the condition like num=0 and x=0 initially
        // num += x;
        //  if(x==n){
        //printf("the summation of first %d natural numbers = %d", n, num);
        // }
        // x++;

        x++;
    }
    if (x > n)
    {
        printf("the summation of first %d natural numbers = %d", n, num);
    }
    else if (n == 1)
    {
        printf("the summation upto 1 natural number is 1");
    }

    printf("\n \n \n \n now we'll so same shit with for loop\n\n\n");
    num = 0;
    for (x = 1; x <= n; x++)
    {
        num = num + x;

        if (x == n)
        {
            printf("the summation of first %d natural numbers = %d", n, num);
        }
    }

    printf("\n\n\n now we will do same shit with do-while loop \n\n\n");
num=0;
x=1;
    do
    {
       num += x;
       x++;
    } while (x<=n);
     if(x>n){ 
    printf("the summation of first %d natural numbers = %d", n, num);
}
    
//write a program to calculate the sum of the number occuring in the multiplication table of n
/*
in above program of summation upto n natural number, the common difference was x=1 
similarly this time multiplication table upto 10 value means a value increment by a certain number 
say in table of 8 the 8 is increment by 8 every time i,e x+=8 
so same here 
assume num=0 and this time take the table from user give its value to y, say a variable
then y will replace the role of x the role new role of x will be to 
run this loop for 10 times since we count table till 10 and intially x=1
give n the value of y now increment n by y every time y will be the common difference
so the code will be num+=n; n+=y;x++;
the condition in loop will x>=1&&x<=10
*/
printf("\n\n\nenter the number for which you want the sum of the number occuring in multiplication table of the entered number :- ");
int y;// we declare y because after completion of loop the value of is modified so wew can't use it in printf
scanf("%d", &y);
x=1, num=0; n = y;
while(x>=1&&x<=10){
    num+=n; n+=y;
    if(x==10){
        printf("\n\nthe summation the numbers occuring in the multiplication table of %d is = %d\n\n", y, num);
    }
    x++;
}
    return 0;
}