#include<stdio.h>
#include<string.h>
int main()
{
int num;
printf("Enter the Number of entities: ");    
scanf("%d", &num);
char word[22] ;
char buffer[num][25];
input(num, buffer, word);


return 0;
}
void input(int num, char buffer[num][25], char word[22])   // to take input of the spells 
{
for(int i=0;i<num;i++) 
{
    printf("Enter the word: ");
   scanf("\n%[^\n]s", buffer);
}
sort(num, word, buffer);
}
void sort(int num, char word[22], char buffer[num][25])   // sorting the buffer
{
for(int j=0;j<num;j++)   
{
for(int k=0;k<num;k++)
{
    if(strcmp(buffer[j], buffer[k])>0)
    {
        strcpy(word, buffer[j]);
        strcpy(buffer[j], buffer[k]);
        strcpy(buffer[k], word);

    }
    

}
}
prnt(num, buffer);
}
void prnt(int num, char buffer[num][25])
{
for(int i=0;i<num;i++)
{
    for(int j=0;j<25;j++)
    printf("%s", buffer[i][j]);
    printf("\n");
}


}