// taking input in array using loops mostly we'll use this method 
#include<stdio.h>

int main()
{
int marks[5];
for(int i=0;i<5;i++){
    printf("enter the marks of student %d = ", i+1);
    scanf("%d", &marks[i]);

}
for(int i=0;i<5;i++){
    printf("\nthe marks of student %d  = %d \n ", i+1, marks[i]);
    

}
// ******* POINTER ARITHEMATIC ********

int *a=&marks[0];
printf("the address of %d = %u\n\n", *a, a);
//6422272
a++;
printf("the address of %d = %u\n\n", *a, a);
// on incrementing the pointer, the address is incremented by 4 as int data type takes 4 bytes memory and after incrementing 
//the pointer  starts pointing towards the new variable stored at that address 

float percentile[3] = {45,89,78};
float *b=&percentile[0];
printf("the address of %.2f = %u\n\n", *b, b);
b++;
printf("the address of %.2f = %u\n\n", *b, b);
// on incrementing the pointer, the address is incremented by 4 as float data type takes 4 bytes memory and after incrementing 
//the pointer  starts pointing towards the new variable stored at that address 

char name[] = "dhruv is patel";
char *c=&name[1];
printf("the address of %c = %u\n\n", *c, c);
c++;
printf("the address of %c = %u\n\n", *c, c);




return 0;
}