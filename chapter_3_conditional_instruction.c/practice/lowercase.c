// create a program to tell that the character entered by the user is a lowercase or not
// for that there is ASCII table so every character and special character  has assigned a unique decimal value  which is listed in a ASCII table
// here we only need to know that A-Z has is from 65-90 and a-b is from 97-122

#include <stdio.h>

int main()
{
    char alpha;
    printf("enter the character \n\n\n");
    scanf("%c", &alpha);
    if (alpha >= 97 && alpha <= 122)
    {
        printf("the entered character is a lowercase alphabet");
    }
    else if (alpha >= 65 && alpha <= 90)
    {
        printf("entered character is uppercase alphabet");
    }
    return 0;
}