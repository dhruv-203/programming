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
printf("Month : %d\n", month);
printf("year : %d\n", year);



return 0;
}
