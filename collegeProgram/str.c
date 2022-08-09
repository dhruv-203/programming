#include<stdio.h>
#include<string.h>
int main()
{

char str1[7]="JHGCF", stri[7]="hello", str2[6]="jhgcf";
strcpy(str2,stri);
printf("%s", str2);
printf("\n%d  %d\n", strlen(stri), strlen(str2));
printf("%d", strcmp(str1,str2));






return 0;
}
