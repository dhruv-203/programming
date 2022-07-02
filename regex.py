import re

def que1():
    word=input("Enter the word: ")
    pattern=re.compile(r'^A\w+')
    matches=pattern.match(word)
    try:
        matches.group(0)
    except AttributeError:
        print("no match found")
    else:
        print("Match Found!!")


    # for x in matches:
    #     print(x.group(0))
def que2():
    with open("hi.txt") as file:
        content=file.read()
    # word=input("Enter the word: ")
    pattern=re.compile(r"^a.*l$")
    print(pattern.search(content))

def que3():        
    # with open("details.txt") as file:
    #     content=file.read()
    number=input("Enter Phone Number: ")
    pattern=re.compile(r"(94\d{8})")
    # print(pattern.findall(content))
    if len(number)==10:
        try:pattern.match(number).group(1)
        except AttributeError: print("The Number Must Starts with 94")
        else:print("Match Found!!!")
    else:
        print("Please Enter 10 digit Phone Number")



