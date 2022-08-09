#include<stdio.h>
int main()
{
// arithematic operators :- +,-,*,/,%
// relational operators :- >,<,>=,<=,==,!=
//logical operators :- &&,||,!

  
 float maths, sci, eng; // the total percent must be greater than 40% and at least 33% in each subject
    float percent;
    printf("enter the marks obtained in the maths out of 100 :-");
    scanf("%f", &maths);
    printf("enter the marks obtained in the sci out of 100 :-");
    scanf("%f", &sci);
    printf("enter the marks obtained in the Eng out of 100 :-");
    scanf("%f", &eng);
    percent = ( (eng + maths + sci)*100) / (300);
    
    if (eng >= 33 &&  maths  >= 33 &&  sci  >= 33 && percent >= 40)
    {
    printf(" you have obtained %f percentage \n you're passed \n", percent);
    }
    if(eng<33 || maths<33||sci<33||percent<40)
    {
    printf("You're FAILED\n\n");
    if(eng<33)
    {
    printf("since you have obtained %f marks in English  \n", eng);
    }
     if(maths<33)
    {
    printf("since you have obtained %f  marks in math \n", maths);
    }
     if(sci<33)
    {
    printf("since you have obtained %f marks in science \n", sci);
    }
     if(percent<40)
    {
    printf("since you have obtained %f percentage \n", percent);
    }
    printf("And in order to pass the total percent must be greater than 40 percent and at least 33 percent in each subject\n");
    
    }
    if(((int) maths+(int) sci+(int) eng)%2==0)
    {
    printf("the total marks is even\n");
    
    }
    if(((int) maths+(int) sci+(int) eng)%2!=0)
    {
    printf("the total marks is odd\n");
    }
    int i =60;
    if(!i){
    printf("true but not true\n"); // this is happening because in c language every integer value is considerd to be true except 0 and as we have apllied '!' not is make the result opposite 
    // if the value is 0 then it will be considered to be false and if won't work if not operator wasnt present  
    }
    return 0;       
    }









