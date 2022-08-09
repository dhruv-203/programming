#include<stdio.h>
int main()
{
int x = printf("hello\n");
printf("%d\n", x);
int y = scanf("%d", &x);
printf("%d", y);


return 0;
}
