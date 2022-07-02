#include<stdio.h>

int main()
{
    // naive way to declare multiple int 
// int marks1, marks2, marks3, marks4 ;
// marks1=45;
// marks2=458; 
// marks3=457;
// marks4=00; instead of this use array 
int marks[4];
printf("enter the marks of first student = ");
scanf("%d", &marks[0]);
printf("enter the marks of second student = ");
scanf("%d", &marks[1]);
printf("enter the marks of third student = ");
scanf("%d", &marks[2]);
printf("enter the marks of fourth student = ");
scanf("%d", &marks[3]);
// note the index of arrays starts from 0 so if there 90 in sq brackets then the count will be 0to89;
printf("the marks of first student = %d\n", marks[0]);
printf("the marks of second student = %d\n", marks[1]);
printf("the marks of third student = %d\n", marks[2]);
printf("the marks of fourth student = %d\n", marks[3]); 
// one more way to define array
int point[7]= {56,78,95,66,23,45};
printf("the points of first  = %d\n", point[0]);
printf("the points of second  = %d\n",point[1]);
printf("the points of third  = %d\n", point[2]);
printf("the points of fourth  = %d\n",point[3]); 
printf("the points of fifth = %d\n", point[4]);
printf("the points of sixth  = %d\n", point[5]);
printf("the points of seventh  = %d\n", point[6]);




return 0;
}