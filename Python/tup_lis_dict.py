# List, Tuple, Dict in Python

# List (Writable)
print("\nList")
lst = [1, 2, 3, 4, 5]
print(lst)

# Append list.append(element), Add the element in list
lst.append(3)
print("\nInserts the element in last indexing")
print(lst)


# Insert list.insert(index, element)
lst.insert(0, 20)
print("\nInsert in list")
print(lst)

# Extends list.extend(list2), Adds two list together in single list
lst2 = [0, 1, 2, 3]
lst.extend(lst2)
print("\nList the extend")
print(lst)

# Remove list.remove(element), remove the first encounter the element
lst.remove(20)
print("\nRemoval of element")
print(lst)

# Pop list.pop(indexNumber), remove the element by index number
lst.pop(-1)
print("\nRemoves the element with index number")
print(lst)

# Index list.index(element), prints the index of first encounter element
print("\nPrints the element's index number")
print(lst.index(1))

# Count list.count(element), prints the count of specified element
print("\nPrints how many times an element occurs in the list")
print(lst.count(1))

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

# ========================================================================

# Tuple (Read only)
print("\nTuple")
tup = (1, 2, 3, 4, 5, 3)
print(tup)

# Index
print("\nSame function as List's index")
print(tup.index(2))

# Count
print("\nSame function as List's count")
print(tup.count(3))

# ========================================================
# Dict (Writable_T&C_APPLY)
print("\nDict")
dictionary = {1: "Hello", 2: "Python", 3: "Microsoft", 4: "VS Code"}
print(dictionary)

# Get, dict.get(index), gets the element of the specified index number
print("\nGets element of the specified index number")
print(dictionary.get(2))

# Items, dict.items(), list out dicts' element with its specified index number
print("\nList out dictionary's element with its specified index number")
print(dictionary.items())

# Keys, dict.keys(), list out the "Used Index number" in the dict
print("\nList out the USED index number in dictionary")
print(dictionary.keys())

# PopItem, dict.popitem(), Removes the last element of the dictionary
print("\nRemoves the last element of the dictionary")
dictionary.popitem()
print(dictionary)

# Values dict.values(), prints only elements of dict (doesn't print index number)
print("\nPrints only element of the dictionary (Doesn't print index number)")
print(dictionary.values())

# Clear, dict.clear(), clears the dict
print("\nSame as List's Clear")
dictionary.clear()
print(dictionary)

