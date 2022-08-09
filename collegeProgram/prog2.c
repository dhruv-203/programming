#include<stdio.h>
#include"header.h"
int main()
{
header();
int age;
printf("Enter your Age:- ");
scanf("%d", &age);
if(age>=18&&age<=40)
{

printf("welcome and enjoy the night \n");

if(age>=23)
{
printf("you are also allowed to drink alcohol\n");
}
else
{
printf("you're not allowed to drink alcohol");
}

}

else if(age<18)
{
printf("you're not allowed to enter since you're underage\n");
}
else if(age>40)
{
printf("you're not allowed enter since you crosses the age limit\n");
}


}
