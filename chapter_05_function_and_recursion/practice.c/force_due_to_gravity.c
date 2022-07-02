//function to calculate force of attraction on a body of mass m exerted by earth (g9.8 m/s^2)
#include<stdio.h>

float force(float m);
int main()
{
float m ;
printf("enter the mass of the body :- ");
scanf("%f", &m);
force(m);
return 0;
}
float force(float m){
    float force ;
    force=m*9.8;
    printf("the force of attraction exerted by earth on a body of mass %fkg is = %fN", m, force);
    return 0;

}