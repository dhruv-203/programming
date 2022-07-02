/*       CHAPTER 5 PRACTICE SET
Q1. write a program using function to find average of three number
Q2. write a function to convert celsius temperature to fahrenheit 
Q3. write a function to calculate force of attraction on a body of mass
m exerted by earth (g9.8 m/s^2)
Q4. write a program using recursion to calculate nth element of fibonacci series 
Q5. what will the following line produce in a c program 
printf("%d %d %d \n", a, ++a, a++);
Q6 write a recursive function to calculate the sum of first n natural number 
Q7. write a program using function to print the following pattern(first n line)
*
***
*****
means if n=4 then print 4 lines and each line should contains odd numbers of stars 
*/
#include<stdio.h>

int main()
{
int a =1 ;
printf("%d %d %d \n", a, ++a, a++);

return 0;
}

/*  *******IMPORTANT POINT********
in printf function when the compiling process starts so for the case like upward this start executing it 
from right to left i,e. first a++ --> ++a -->          a
                            = 3      = 5              = 5
        then its value will be   since its pre      since till here its value is 5
        incremented to 4       4 will convert to 5 
                            and give out put 5
at the time of printing the value its start printing from left to right 
therefore it prints
a=5, ++a=5 and a++ = 3;

*/