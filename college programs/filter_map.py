lst = [3,5,6,910,15,14]

eve_list = list(filter(lambda x: (x%2) == 0, lst))
print(eve_list)

my_list = list(map(lambda x: x+2, lst))
print(my_list)