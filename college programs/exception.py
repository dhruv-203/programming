import sys


global x 
try:
    
    x= input("enter")
    x=x+1
except:
    # if x=="five" :
    #     x=5
    #     x=x+1
    #     print(x)
    print("the Type of exception: ", sys.exc_info())
    print( type(sys.exc_info()))
    print("the Type of exception: ", sys.exc_info()[0])