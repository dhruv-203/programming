#include <stdio.h>
#include <string.h>
int main()
{
    int i=1;
    char enroll[17];
     char name[50];
    char div[3];
    char dob[20];

   
    
        printf("ENTER YOUR ENROLLMENT NUMBER TO REGISTER: ");
        scanf("\n%[^\n]s", enroll);
        printf("ENTER YOUR NAME TO REGISTER: ");
        scanf("\n%[^\n]s",name);
        printf("ENTER YOUR DIVISION TO REGISTER: ");
        scanf("\n%[^\n]s", div);
        printf("ENTER YOUR DATE OF BIRTH TO REGISTER(dd/mm/yyyy): ");
        scanf("\n%[^\n]s", dob);
        
        
        FILE *fp = fopen("file.txt", "w");
        fprintf(fp, "Enroll: %s\n", enroll);
        fprintf(fp, "Name: %s\n", name);
        fprintf(fp, "Div: %s\n", div);
        fprintf(fp, "Date of Birth: %s\n", dob);
        fclose(fp);
        printf("PRESS 0 TO EXIT: ");
        scanf("%d", &i);
        if(i!=0)
        main();
         search();
    return 0;
}

void search()
{   
    char enroll[18];
    char name[50];
    char div[3];
    char dob[20];
    printf("-----------------------------\n");
    printf("    SEARCHING ENROLL NO       \n");
    printf("------------------------------\n\n");
    printf("ENTER ENROLLMENT NUMBER TO SEARCH: ");
    scanf("\n%[^\n]s", enroll);
    FILE *fp = fopen("file.txt", "r");
    fscanf(fp, "\n%[^\n]s", enroll);
    fscanf(fp, "\n%[^\n]s", name);
    fscanf(fp, "\n%[^\n]s", div);
    fscanf(fp, "\n%[^\n]s", dob);
    fclose(fp);
        printf( "%s\n", enroll);
        printf( "%s\n", name);
        printf( "%s\n", div);
        printf( "%s\n", dob);

}