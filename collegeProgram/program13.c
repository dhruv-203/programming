#include<stdio.h>
#include"header.h"
int main() 

{
header();
char stname[50], subname[40];
int marks;
char grade;

printf("Enter Student Full Name: ");
gets(stname);
printf("Enter Subject Name: ");
gets(subname);
printf("Enter Student's Internal Marks in %s: ", subname);
scanf("%d", &marks);
if(marks>=26&&marks<=30)
{
grade = 'A'; 
}

if(marks>=21&&marks<=25)
{
grade = 'B'; 
}

if(marks>=13&&marks<=20)
{
grade = 'C'; 
}

if(marks==12)
{
grade = 'D'; 
}



if(marks>=12&&marks<=30)
{
printf("Congratulation %s cleared %s with %c \n", stname, subname, grade);
}

else if(marks<12)
{

printf("Sorry %s was not Qualified in %s \n", stname, subname);
}





return 0; 
}
