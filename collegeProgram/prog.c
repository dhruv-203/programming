#include<stdio.h>
#include"header.h"
int main()
{
header();
char alpha;
printf("Enter any Aplhabet either capital or small:- ");
scanf("%c", &alpha);
if(alpha>=65&&alpha<=90)
{
printf("You have entered is in  Uppercase Alphbet\n");

} 
else if(alpha>=97&&alpha<=122)
{
printf("You have entered is in Lower Alphabet");

}


else 
{
printf("Please enter a valid Alphabet\n");
}
return 0;

}
