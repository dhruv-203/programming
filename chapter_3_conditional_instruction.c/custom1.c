// program which regulates the entry of people in a party
#include <stdio.h>
// information we have
/*
firstly the age group should be b/w 18-40 
then couples are of above 18 allowed to go 
or if the person is single then he should be above the 23 years to go
then if the person holds vippass then even though he is single he is allowed 
under the condition that he is above 18
and if the person is above 18 but less than 25 then he should be informed he is not allowed to drink
alcohol
*/
int main()
{
    int age, couple, vip;
    printf("enter your age\n");
    scanf("%d", &age);
    printf("enter 1 if you are in couple else enter 0 \n ");
    scanf("%d", &couple);
    printf("if you want to purchase 500$ vip pass then press 1 else 0 only purchase if you are above 18 \n");
    scanf("%d", &vip);

    if (age >= 18 && age <= 40)
    {
        if (age >= 23 || couple == 1 || vip == 1)
        {
            if (age < 25)
            {
                printf(" congrats you are eligible to go \n but you are not allowed to drink alcohol since your age is below 25\n");
            }
            else
            {
                printf("congrats you are eligible to go \n since you are above 25 you are allowed to drink alcohol \n");
            }
        }
        else
        {
            printf("sorry but you are not allowed to enter since your age is below 23 and if you wish to go single and also if you are above 18 then you can purchase vip pass\n");
        }
    }
    else
    {
        printf("sorry you are not allowed in the party since you are not from required age group\n");
    }
   
    printf("now the same thing we try in one if else statement \n \n ");

    if(age>=18&&(couple==1||vip==1)&&age<=40 || age>=23&&(couple!=1||vip!=1)&&age<=40){
if(age>=25){
    printf("congratulations you are allowed to go in party \n you are allowed to drink alcohol \n");
}
else {
    printf("congratulations you are allowed to go in party \n but, not allowed to drink alcohol since you are below 25 \n");
}
    }
else {
    printf("sorry but you are not allowed to in party \n");
}
 printf("now we will try the same thing with if-else if-else ladder \n");

 if(age>=18&&age<=40&&(couple==1||vip==1)){// here when we don't add brackets on couple||vip then the compiler will assume it as
 //(age&&age&&couple)||vip so even the age exceed the 40 limit but due to vip==1 therefore the if statement runs
 // because of the precedence && has high precedence thus all && executes first 
     printf("you are allowed to go in party \n but you're not allowed to drink alcohol since you're below 25\n");
 }
 else if(age>=23 && age<=40 && (couple!=1||vip!=1)){
     (age>=25)?printf("congratulations your allowed to go in party \n and you're allowed to drink alcohol\n"):printf("congratulations you're allowed to go in party \n but you're not allowed to drink alcohol\n");
 }
 else {
     printf("sorry but you are not allowed to go in party\n ");
 }
    return 0;
}