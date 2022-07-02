dict={
    "hi":"hello",
    "bye":"goodbye",
    "li":[1,2,3,4,5]
}
for x in dict["li"]:
    print(x)
dict.update({"ahi":"leeo"})
print(dict)
# dict=list(dict)
# print(dict)
print(type(dict.values()))
print(list(dict.values()))
li=list(dict.values())
print(li[2][3])