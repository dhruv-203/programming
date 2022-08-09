#include<stdio.h>
#include"header.h"

int main()
{

header();

char student_name[50];
char enroll_no[20];
char collage_name[50];
char course_name[50];

printf("Student Full Name:-");
scanf("%[^\n]s",student_name);



printf("Student Enrollment NO.:-");
scanf("\n%[^\n]s",enroll_no);



printf("Collage Name:-");
scanf("\n%[^\n]s",collage_name);





printf("Course Name:-");
scanf("\n%[^\n]s",course_name);
printf("\n");
printf("\n");


printf("----------------------------------------------\n");
printf("              STUDENT DETAILS\n");
printf("----------------------------------------------\n");

printf("\n%s", student_name);


printf("\n%s", collage_name);


printf("\n%s", enroll_no);



printf("\n%s", course_name);
printf("\n");
return 0;
}
