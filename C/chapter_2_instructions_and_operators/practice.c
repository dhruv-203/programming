#include<stdio.h>

int main()
{
/*
Q1. which of the following is invalid in C 
i) int a; b=a; 
the answer is this  invalid because we haven't mention b variable
ii) int v = 3^3;
this is valid because ^ itself is a function but it is 
invalid to get 3 to the power 3
iii) char dt = '21 dec 2020';
the answer is invalid because it allows a single character  
Q2. what type of the data type will 3.0/8-2 returns?
the answer is it will return double data type because most of the compilers treat every decimal as double
Q3. write a program to check whether a number is divisible by 97 or not
Q4. explain step by step the evaluation of 3*x/y-z+k
where x=2, y=3, z=3, k=1
3*x/y-z+k -----> (3*x)/(y)-(z)+(k) = (3*2)/(3)-(3)+1 
= 2-3+1 = 0
Q5. 3.0+1 will be 
(a) integer
(b) float point number
(c) character 
the answer is b
*/
char dt[12] = "21 dec 2020"; // correct method 
printf("%s \n", dt);
printf("%f\n", 3.0/8-2);

int m; // program to check whether a number is divisible by 97
// if the remainder comes out to be 0 then the number is divisible by 97
printf("enter the number you want to verify the divisibility \n");
scanf("%d", &m);
printf("the remainder is %d \n", m%97);
int x=2, y=3, z=3, k=1;
printf("the answer is %d", 3*x/y-z+k);
return 0;
}