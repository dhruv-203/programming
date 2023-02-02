class Stack:
    stack = []

    def __init__(self, size):
        self.size = size

    def getStack(self):
        return self.stack

    def push(self, value):
        if not len(self.stack) >= self.size:
            self.stack.append(value)
            return True
        else:
            print("Stack Overflowed!!")
            return False

    def pop(self):
        if not len(self.stack) == 0:
            return self.stack.pop()
        else:
            print("Stack UnderFlowed!!")
            return False

    def peep(self, index):
        if len(self.stack)-index >= 0:
            return self.stack[int(f"-{index}")]
        else:
            return False

    def change(self, index, value):
        if not index >= len(self.stack):
            self.stack[index] = value
            return True
        else:
            return False

    def display(self):
        if len(self.stack) == 0:
            print("Underflow!!")
            return;
        for i in range(0, self.size):
            if i < len(self.stack):
                print(self.stack[i], end=" ")
            else:
                print("none", end=" ")
        print("")


size = int(input("Enter the size of the stack: "))
obj = Stack(size)
obj.push(5)
obj.push(4)
obj.push(3)
obj.push(2)
obj.push(1)
obj.push(0)  # won't be pushed as stack is full
obj.display()
print("I am popped: ", obj.pop())
print("i am popped: ", obj.pop())
obj.display()
print("Second element from top: ", obj.peep(2))
obj.push(2)
obj.push(1)
obj.change(3, 45)
obj.display()
mystack = obj.getStack()
print(mystack)
