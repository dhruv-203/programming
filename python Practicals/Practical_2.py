#Name: Patel Dhruv VinodBhai 
#Enrollment No. : 202103103510445
# Program BTech Computer Science And Engineering
#Practical 2

lst = [1,2,5,4,5,1,2,3,3,4,5]

# c. updation on List elements in python

# Append list.append(element), Add the element in list
lst.append(3)
print("appended 3 in list")
print(lst)

#Inserts the element in last indexing
# Insert list.insert(index, element)
lst.insert(3,"i am 3 index") #positive index
lst.insert(-2 ,"i am -3 index") #negative index
print("\nInsert in list")
print(lst)

# Extends list.extend(list2), Adds two list together in single list
lst2 = [0, 1, 2, 3]
lst.extend(lst2)
print("\nList the extend")
print(lst)

#a. positive and negative indexing with python List
print("\npositive and negative index")
print(lst[3])
print(lst[-7])

#d. deletion of a single python list element and multiple elements using slicing operator

# Remove list.remove(element), remove the first encounter the element
lst.remove("i am 3 index")
lst.remove("i am -3 index")
print("\nRemoval of element")
print(lst)

# Pop list.pop(indexNumber), remove the element by index number
lst.pop(-1)
print("\nRemoves the element with index number")
print(lst)

# multiple elements deletation 
del lst[2:5]
print("\nRemoves the elements at 2,3,4 index number")
print(lst)

# Index list.index(element), prints the index of first encounter element
print("\nPrints the element's index number")
print(lst.index(1))

# Count list.count(element), prints the count of specified element
print("\nPrints how many times an element occurs in the list")
print(lst.count(2))

# Sort list.sort(), sorts the list
print("\nSorting of list")
lst.sort()
print(lst)

# Reverse list.reverse(), reverse the list elements (1,2,9,5) to (5,9,2,1)
print("\nReverse the list elements")
lst.reverse()
print(lst)

# len len(list),
print("\nDescribes the number of elements in list")
print(len(lst))

# Copy, Copies one list to another list
print("\nCopies one list to another list")
lst2 = lst.copy()
print(lst2)

# Clear list.clear(), empties the list
lst.clear()
print("\nEmpties the List")
print(lst)

#b. slicing operations
lst = [1, 2, 23, 45, 56, 67]
print("\n",lst)
print(lst[:])
print(lst[:4])
print(lst[1:5])