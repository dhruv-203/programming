#include<stdio.h>
#include"header.h"
int main()
{
header();
int date, month, year;
char day[20];
printf("Enter today's Day followed by Today's Date(dd-mm-yyyy) :- "); 
scanf("%s %d-%d-%d", day, &date, &month, &year);
printf("\n");
printf("Day : %s\n", day);
printf("Date : %d\n", date);
printf("Month : ");
if(month==1)
{printf("January\n");}
else if(month==2)
{printf("February\n");}
else if(month==3)
{printf("March\n");}
else if(month==4)
{printf("April\n");}
else if(month==5)
{printf("May\n");}
else if(month==6)
{printf("June\n");}
else if(month==7)
{printf("July\n");}
else if(month==8)
{printf("August\n");}
else if(month==9)
{printf("September\n");}
else if(month==10)
{printf("October\n");}
else if(month==11)
{printf("November\n");}
else if(month==12)
{printf("December\n");}
printf("year : %d\n", year);










return 0;
}
