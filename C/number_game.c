/*
we will write a program that genrates a random number and asks the player
to guess it if the number is higher than the actual number, the program displays
"lower number please" Similarly if the entered is lower than the actual number 
then program prints "higher number please"
When the user guesses the correct number the program displays the number of guess the 
player used to get correct number 


hint :- use loop
        random number genarator
*/
#include <stdio.h>
#include <stdlib.h>
#include <time.h>
int main()
{

    printf("following are the rule to play this game:- \n\n\nguess the random number by entering a number if the entered number is higher than the actual number, it will displays\n'the number you have entered is higher than actual number, please enter lower number'. Similarly if the entered is lower than the actual number \nthen it will displays 'the number you have entered is lower than actual number, please enter higher number'\n\nWhen the user guesses the correct number the program displays the number of guess the \nplayer used to get correct number\n\n ");
    srand(time(0));
    int number, guess = 0, num=0;// guess is player's entered number and num is the total number of guesses
    number = rand() % 100 + 1;
    //printf("the  number is %d", number);
    while (guess != number)
    {
        printf("\n\n\nenter any number of your choice from 1-100 to guess the correct number\n\n");
        scanf("%d", &guess);
        num++;
        if(guess>number){
            printf("the number you have entered is higher than actual number, please enter lower number\n\n");
        }
        else if(guess<number){
            printf("the number you have entered is lower than actual number, please enter higher number\n\n");
        }
        else
        {
            printf("\n\ncongratulations!! you have guessed the correct number \n\nyou taken %d no. guesses\n\n", num);
        }
    }
    
    return 0;
}