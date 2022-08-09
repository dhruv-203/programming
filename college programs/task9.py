


class c1:
    var1="tmp"
    var2="pmt"
class c2(c1):
    var9=234
    var4=True
class c3:
    var5="I am stand alone class"

ob1=c1()
ob2=c2()
ob3=c3()


if isinstance(ob1, c1):
    print("ob1 is an Instance of c1 class")
if isinstance(ob1, c2):
    print("ob1 is an Instance of c2 class")
if isinstance(ob1, c3):
    print("ob1 is an Instance of c3 class")
if isinstance(ob2, c1):
    print("ob1 is an Instance of c2 class")
if isinstance(ob2, c2):
    print("ob1 is an Instance of c2 class")
if isinstance(ob2, c3):
    print("ob1 is an Instance of c2 class")
if isinstance(ob3, c1):
    print("ob1 is an Instance of c2 class")
if isinstance(ob3, c2):
    print("ob1 is an Instance of c2 class")
if isinstance(ob3, c3):
    print("ob1 is an Instance of c2 class")
    
    
print("\n\n\n")
if issubclass(c1,c2):
    print("c1 is dervied class from c2")
if issubclass(c2,c1):
    print("c2 is derivied class from c1")
if issubclass(c1, c3):
    print("c1 is dervied class from c3")
if issubclass(c3, c1):
    print("c3 is dervied class from c1")
if issubclass(c2, c3):
    print("c2 is dervied class from c3")
if issubclass(c3, c2):
    print("c3 is dervied class from c2")


