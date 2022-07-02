/* 
======> INCREMENT AND DECREMENT OPERATORS <======
--> increment operator is used to increment the value of a variable by 1 
||y 
--> decrement operator is used to decrement the value of a variable by 1

example:- 
int a=5;                                        int a=5;
a++;                                            a--;
the result will 6                              the result will 4

a++ :- a=a+1                                   a-- :- a=a-1

there are two types of increment/decrement 
pre increment/decrement ++a,--a
post increment/decrement a++,a--

the difference b/w them matters only if there values are assigned to another variable 
like x = a++ and x=++a
are two different things we will discuss that on later 

you cannot use rvalue before or after the increment/decrement operator 
example :-
(a+b)++ 
            is invalid
++(a+b)
error will be showed as  lvalue required as increment operand



now what is lvalue and r value
 
lvalue(left value) :- simply means an object that has indentifiable location in memory i,e assigned as variable


lvalue must be a variable because they have the capability  to store the data 
lvalue cannot be a function(which return a integer value suppose), expression(like a+b) or constant(5,6)



rvalue :- simply means an object has no identifiable location in memory

 anything which is capable of returning the constant value like expression a+b gives a constant value



 difference b/w pre and post increment/decrement 

  pre :- means first increment/decrement then assing the value to another variable
  example x = ++a , where a = 5;
  then  the value of x will be 6 acc to definition 

  post :- means first assing the value to another variable and then increment the value 
  example x = a++ , where a=5;
  then the value of x will be 5 acc to definition

another example can be 
int a=5;
printf("%d", ++a);                              printf("%d", a++); 
here it will be 6                               here it will be 5 
                                                but the new value of a will be stored as 6 

===> post increment/decrement in context of equation

first use the value in the equation and then increment/decrement the value

===> pre increment in context of equation 

first increment the value and then use it in an equation 


question:- what will bw the output 
 
 int a=4, b=5;
 printf("%d", a+++b); for better explation watch neso academy's increment and decrement operators video part
                      they introduced the concept of lexical analyzer which i haven't mentioned 
 now there are two possibility 
 (a++)+b  or (a)+(++b)    first is valid 
 because the compiler will intepret like 
 first it will recognize the variable a then recognize '+' operator and as there is second '+' operator
 whitout any spaces it will consider as '++' post increment operator then there is third operator + now this requires two operands 
 which are a++ and b so now the answer will be 9
 because it is post increment value of a will be use the value as it is and then incremented value will be stored in memory a variable 
 and the value 4 will be used in equation 

 but if was like 
 printf("%d", a + ++b);
 then the answer would be like 10 since here b is in pre increment so value will be incremented first then it will be used in equation 

now =====>
"+=" is compound assignment operator use of this 
to increase the value of a variable by desired number 
example 
a+=10; this means that a=a+10;
//similarly *=, -=, /=, %=   %= is used to check the remainder when the variable is divided by certain number   

  >>>>>>>IMPORTANT POINT<<<<<<<<<<
in printf function when the compiling process starts so for the case like upward this start executing it 
from right to left i,e. first a++ --> ++a -->          a
                            = 3      = 5              = 5
        then its value will be   since its pre      since till here its value is 5
        incremented to 4       4 will convert to 5 
                            and give out put 5
at the time of printing the value its start printing from left to right 
therefore it prints
a=5, ++a=5 and a++ = 3;


*/
#include<stdio.h>

int main()
{
int a=4, b=5;
printf("\n\n%d\n\n", a+++b);
int x = 7, y=5;
int z = x++;
printf("\n\n%d\n\n", x++);
printf("\n\n%d\n\n", ++y); // y=6
printf("\n\n%d\n\n", x + ++y); // on reaching here x = 9 and y=6 
printf("\n\n%d\n\n", z); // the line in which z is defined till there x has value 7
printf("%d", a%= 5);

return 0;
}