# B.Tech Computer Science and Engineering
# Dhruv Patel
# 202103103510445

# Create of dictionary in python
dict = { "name":"xyz", "age":18, "branch":"B.tech CSE" }
print(dict)

# Overwriting of values (using index name)
dict["name"] = "abc"
print(dict)

# copy(), copies the dictionary
dict_cp = dict.copy()
print(dict_cp)

# get(), used to find out element or value of the given index name
print(dict.get("name"))

# items(), lists index names with its values/elements
print(dict.items())

# keys(), prints indexes of the element
print(dict.keys())

# popitem(), removes last element of the dict
dict.popitem()
print(dict)

# values(), prints all the elements of the dictionary without their index name
print(dict.values())

# clear(), removes everything from the dictionary
dict.clear()
print(dict)