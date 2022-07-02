//write a program to print natural numbers from 10 to 20 when initial loop counter "i" is initialized as 0
// write a program to print the n natural numbers using do while loop whereas n is the last term and it is to be user input
#include <stdio.h>

int main()
{
    int i = 0;
    while (i >= 0 && i < 9)
    {
        i++;
    }
    while (i >= 9 && i <= 19)
    {
        i++;
        printf("%d\n", i);
    }

    printf("enter the last term upto which you want natural numbers to be printed :- ");
    int n;
    scanf("%d", &n);
    int num =1 ;
    do {
        printf("\n%d\n", num);
        num++;
    }while(num<=n);

    // write a program to print n natural numbers in decending order 
    for(n;n;n--){
        printf("%d\n", n);
    }
    return 0;
}