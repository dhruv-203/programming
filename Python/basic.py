a= input("Enter a number: ")
print(type(a)) # when we take a input using this func the input is always a string type even though we enter a int,float,boolean
a=int(a)
b=input("Enter a number: ")
b=int(b)
print("The addition of the",a,"and",b,"is",a+b) #addition of two number
print("the remainder of", a, "and", b, "is", a%b) #modular of the two numbers 
print(a,">", b,"=",a>b) # comparison operator returns a boolean value
# average = #division of two number is always returned in float type even though its completely divisible
print("The Average of the entered numbers: ", ((a+b) / 2 )) #the average of the numbers note: the brackets are very important
print("the square of", a, "=", a**2) # base**exponent
print("the square of", a, "=", pow(a, 2))
print(''' my name is dhruv patel
 and i am in 2 sem 
 i have got 9.85 sgpa''')
'''
 a multiline comment in phyton is given by three single qoutes  only when used alone 
in pyton a string can be stored in '' single qoutes
                                   "" double qoutes 
                                   ''' ''' three single qoutes 

'''
greeting= "Good Morning"
name="-dhruv patel"
print(name, "and", greeting, 
 greeting + name )
 # now accessing the particular character of the string 
print("the 3rd charac of the name is : ", name[2])
print("the 2,3,4 charac of the name: ", name[1:3]) # name[start_index:end_index] first index included and the last index is not included its like a floor function 
print("the last charac of the name string is : ",name[-1]) #we use negative indices to represent the index number 
#but here the numbering manner is different than the positive index 
# here -1 represent the last charac 
# -2 second last and so on

