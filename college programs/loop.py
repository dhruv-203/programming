# normal range function range(5) i,e runs for 0-4

for i in range(5):
    print(i)
# second way of the writting of the range(5,10) runs for 5-9
print()
for i in range(5,10):
    print(i)
print()
for i in range(5,20,3):
    print(i)

# list using loop
list=['Dhruv','Harsh', 'neel','uv', 'dhokul']
for name in list:
    print(name)
print()
#dictionary
a={"dhruv":"patel", "harsh":"gamit", 45:"Dhruv"}
p=a.get("dhruv")
print(p)
print()
for key,pair in a.items():
    print(a.get(key))
