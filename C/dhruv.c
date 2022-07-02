#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <unistd.h>

void main(void) {
        int option;
        system("clear");
        printf("------------------------------------\n");
        printf("      Student Biodata (Ver:2.8)     \n");
        printf("------------------------------------\n");
        printf("Press 1 for searching the database\n");
        printf("Press 2 for adding new record in database\n");
        printf("Press 3 for removing record from database\n");
        printf("Press any other key to quit\n: ");
        scanf("%d", &option);
        switch(option) {
                case 1: {
                        system("clear");
                        search();
                        break;
                }
                case 2: {
                        system("clear");
                        auth(option);
                        break;
                }
                case 3: {
                        system("clear");
                        auth(option);
                        break;
                }
                default: {
                        system("clear");
                        exit(0);
                }
        }
}


void insert(void) {
        char name[75], enroll[25], course[17], dob[20];
        printf("------------------------------------\n");
        printf("         New Student Record         \n");
        printf("------------------------------------\n");
        printf("\nEnter exit to quit and back to go back to main menu\n\n");
        printf("Enter Enrollment Number: ");
        scanf("\n%[^\n]s", enroll);
        if(strcmp("back", enroll)==0) {
                system("clear");
                main();
        }
        if(strcmp("exit", enroll)==0) {
                system("clear");
                exit(0);
        }
        if( access(enroll, F_OK) == 0 ) {
                system("clear");
                printf("This enrollment number already exists...\n\n");
                insert();
        }
        printf("Enter Name: ");
        scanf("\n%[^\n]s", name);
        printf("Enter Date of Birth (dd/mm/yyyy): ");
        scanf("\n%[^\n]s", dob);
        printf("Enter Course Name: ");
        scanf("\n%[^\n]s", course);

        printf("\n\n");
        short int key=0;
        system("clear");
        printf("------------------------------------\n");
        printf("        Is this info correct ?      \n");
        printf("------------------------------------\n");
        printf("Name: %s\nEnrollment Number: %s\nDate of Birth: %s\nCourse Name: %s\n\n", name, enroll, dob, course);
        printf("Is this info correct ? (Yes:1 No:0 ): ");
        scanf("%hd", &key);
        if(key==1) {
                generate(name, enroll, dob, course);
        } else {
                system("clear");
                insert();
        }
}

void generate(char name[75], char enroll[25], char dob[20], char course[17]) {
        FILE *open = fopen(enroll, "w");
        fprintf(open, "Name: %s\n", name);
        fprintf(open, "Enrollment Number: %s\n", enroll);
        fprintf(open, "Date of Birth: %s\n", dob);
        fprintf(open, "Course: %s\n", course);
        fclose(open);
        system("clear");
        printf("\n\n%s Registration Successful\n\n", enroll);
        main();
}


void search(void) {
        char enroll[25], buffer[300];
        printf("------------------------------------\n");
        printf("        Search Student Record       \n");
        printf("------------------------------------\n");
        printf("\nEnter exit to quit and back to go back to main menu\n\n");
        printf("Enter Enrollment Number: ");
        scanf("\n%[^\n]s", enroll);
        if(strcmp("back", enroll)==0) {
                system("clear");
                main();
        }
        if(strcmp("exit", enroll)==0) {
                system("clear");
                exit(0);
        }
        if( access(enroll, F_OK) != 0 ) {
                system("clear");
                printf("\nEnrollment number doesn't exist, Please run this portal again to register a new student record\n\n");
                search();
        }
        FILE *open = fopen(enroll, "r");
        system("clear");
        fread(buffer, 50, 50, open);
        printf("------------------------------------\n");
        printf("            Student Record          \n");
        printf("------------------------------------\n");
        printf("%s", buffer);
        printf("------------------------------------\n\n");
        sleep(5);
        printf("\n\n");
        search();
}

void del(void) {
        char enroll[25]; int key;
        printf("------------------------------------\n");
        printf("        Delete Student Record       \n");
        printf("------------------------------------\n");
        printf("\nEnter exit to quit and back to go back to main menu\n\n");
        printf("Enter Enrollment Number: ");
        scanf("\n%[^\n]s", enroll);
        if(strcmp("back", enroll)==0) {
                system("clear");
                main();
        }
        if(strcmp("exit", enroll)==0) {
                system("clear");
                exit(0);
        }
        if( access(enroll, F_OK) != 0 ) {
                system("clear");
                printf("\nEnrollment Number Doesn't exist\n\n");
                del();
        }
        printf("Are you sure ? (Yes:1, No:0)\n: ");
        scanf("%d", &key);
        if(key==0) {
                system("clear");
                del();
        }
        remove(enroll);
        system("clear");
        printf("\n\nRecord %s cleared\n", enroll);
        main();
}
//===============================================================================
//                  This section of code is work in progress
//===============================================================================
void modify(void) {
        char enroll[25];
        printf("------------------------------------\n");
        printf("        Modify Student Record       \n");
        printf("------------------------------------\n");
        printf("\nEnter exit to quit and back to go back to main menu\n\n");
        printf("Enter Enrollment Number: ");
        scanf("\n%[^\n]s", enroll);
        if(strcmp("back", enroll)==0) {
                system("clear");
                main();
        }
        if(strcmp("exit", enroll)==0) {
                system("clear");
                exit(0);
        }
        if( access(enroll, F_OK) !=0 ) {
                printf("\n\nNot there\n\n");
                modify();
        }
        printf("\n\nTHIS SECTION IS WORKING !!!\n\n");
        exit(0);
}
//===============================================================================
void auth(int option) {
        char username[10]; int passcode;
        printf("------------------------------------\n");
        printf("            Authenication           \n");
        printf("------------------------------------\n");
        printf("\nEnter exit to quit and back to go back to main menu\n\n");
        printf("Enter Username: ");
        scanf("\n%[^\n]s", username);
        if(strcmp("back", username)==0) {
                system("clear");
                main();
        }
        if(strcmp("exit", username)==0) {
                system("clear");
                exit(0);
        }
        printf("Enter 4 Digit Passcode: ");
        scanf("%d", &passcode);
        system("clear");
        if(strcmp(username, "Admin") == 0 && passcode == 1234) {
                printf("\n\nAuthenication Successful, you are being redirected in few seconds\n\n");
                sleep(3);
                if(option==3) {
                        system("clear");
                        del();
                }
                if(option==2) {
                        system("clear");
                        insert();
                }
        }
        system("clear");
        printf("\n\nWrong Username or Password\n\n");
        sleep(3);
        auth(option);
}