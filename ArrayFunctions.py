class array:
    arr = []
    size = 0

    def __init__(self, size):
        self.size = size

    def insert(self,  value, index=len(arr)):
        if index >= self.size or len(self.arr) >= self.size:
            print("OverFlow!!")
            return False
        else:
            self.arr.insert(index, value)
        # self.arr[index] = value
        print(self.arr)
        return True

    def pop(self, index=(len(arr)-1)):
        if len(self.arr) == 0:
            print("UnderFlow!!")
            return False
        # print(f"i am  {index}")
        return self.arr.pop(index)

    def update(self, index, value):
        if len(self.arr) == 0:
            return False
        self.arr[index] = value
        return True

    def search(self, value):
        if len(self.arr) == 0:
            return False
        try:
            return self.arr.index(value)
        except ValueError:
            return -1

    def display(self):
        for i in range(0, len(self.arr)):
            print(self.arr[i], end=" ")
        print("")


myarr = array(5)
myarr.insert(4)
myarr.insert(4, 0)
myarr.insert(2, 1)
myarr.insert(3, 2)
myarr.insert(4, 3)
myarr.insert(5, 4)  # size exceed
myarr.insert(6, 5)  # size exceed
myarr.display()
print(myarr.pop())
print(myarr.pop(2))
print(myarr.search(45))
myarr.update(2, 600)
print(myarr.search(600))
myarr.display()
print(myarr.pop())
print(myarr.pop())
print(myarr.pop())
myarr.pop()

