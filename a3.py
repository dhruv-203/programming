# This is the way to declare a String
string = "This is a String"
print(string)

# Upper and Lower, str.upper() and str.lower() converts the whole text to upper case and lower case respectively
print("\n\nLower Case: " + string.lower() + "\nUpper Case: " + string.upper())

# Find and Replace, str.find(str) and str.replace(str1, str2)
print("\n")
print("Original String: " + string)
print("\"a\" is located at index: " + str(string.find("a")))
print("Replacing \"a\" with \"not a\": " + str(string.replace("a", "not a")))

''' 
    Join and Split, str.split(str) and element.join(list,tupple) , split function will split the string in every encounter of the provided
 string into list. Where as join is just opposite of split
'''
print("\n\nSplit function works like this: " + str(string.split()))
lst = ["Strings", "are", "group", "of", "characters"]
print("Join Function works like: " + " ".join(lst))

''' 
Some important fundamentals of String:
- Any string variable is mutable but a single character (example: String[0]) is not mutable
- In python we can multiply and add strings with "*" and "+" respectively. DO REMEMBER, your "numeric value" is string or int while performing any arithmatic tasks
- print("Python" + " is fun"), joining of multiple statements are possible ONLY IF they are string !!!


Some points to be noted about List, Tupple and Dict

List: RW permission, uses [], uses automatic indexing which goes from 0 to n and -1 to n+1
Tupple: RO permission, uses (), uses automatic indexing like List
Dict: RW permission (T&C apply), uses {}, You have to manually assign the index/reference to the element


Accessing elements from list, Tupple and String (Yeah, you read that correctly its String not Dict)
'''
string = "Again we have a string here !!!"
print(string)
print(string[:])
print("%s\n\n\n" %(string))

print("Note what is happening here while using different parameters")
lst = [1, 2, 23, 45, 56, 67]
print(lst)
print(lst[:])
print(lst[:4])
print(lst[1:5])

# Methods to access dict
eg = {1: "This", 2: "is", 3: "a", 7: "Python", 4: "Dictionary"}

print("First method by indexing: " + eg[7])
print("Second method by get: " + eg.get(7))
