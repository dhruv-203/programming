#include <stdio.h>
// program to get the area of the base of cylinder and the volume cylinder
int main()
{
    int r, h;
    float pi = 3.14;
    printf("enter the radius of the cylinder ");
    scanf("%d", &r);
    printf("the area of the base of the cylinder is %f\n", pi * r * r);
    printf("now to get the volume of the cylinder enter the height of the cylinder ");
    scanf("%d", &h);
    printf("the volume of the cylinder is %f", pi * r * r * h);
    return 0;
}