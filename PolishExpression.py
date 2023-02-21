'''
CHAR    PFN     PGT
+,-     1       2
*,/     3       4
^       6       5     !IMPORTANT! remembering trick is right associativity 5 to right then 6 unlike rest left smaller than right
var     7       8
(       9       0
)       0       -
rank of variable = 1
rank of operator = -1
rank of brackets = 0
'''


class Stack:
    stack = []
    counter = 0
    infixString = "("
    revPolishString = ''
    rank = 0
    PFN = {
        "+": 1,
        "-": 1,
        "*": 3,
        "/": 3,
        "%": 3,
        "^": 6,
        "(": 9,
        ")": 0
    }
    PGT = {
        "+": 2,
        "-": 2,
        "*": 4,
        "/": 4,
        "%": 4,
        "^": 5,
        "(": 0,
    }

    def P(self, char):
        if self.PFN.get(char) == None:
            return 7
        else:
            return self.PFN.get(char)

    def G(self, char):
        if char != ')' and self.PGT.get(char) == None:
            return 8
        elif char != ')':
            return self.PGT.get(char)
        else:
            print("INVALID")
            return False

    def __init__(self, infixString: str):
        self.infixString += infixString
        self.infixString += ")"

    def __push(self, value):
        if not len(self.stack) >= self.size:
            self.stack.append(value)
            return True
        else:
            print("Stack Overflowed!!")
            return False

    def __pop(self):
        if not len(self.stack) == 0:
            return self.stack.pop()
        else:
            print("Stack UnderFlowed!!")
            return False

    def __nextChar(self):
        self.counter = self.counter+1
        if self.counter > (len(self.infixString)-1):
            return ''
        return self.infixString[self.counter]

    def display(self):
        for i in self.stack:
            print(i, end=" ")
        print("")

    def getRevPol(self):
        check = True
        self.stack.append("(")
        next = self.__nextChar()
        while next != '':
            # pop
            while self.G(self.stack[-1]) > self.P(next):
                temp = self.__pop()
                print("pop: ", temp)
                self.revPolishString += temp
                if temp in ['+', '-', '*', '/', '^', "%"]:
                    self.rank = self.rank-1
                else:
                    self.rank = self.rank+1
                if self.rank < 1:
                    print("INVALID")
                    return False
            # push
            if self.G(self.stack[-1]) != self.P(next):
                print("push", next)
                self.stack.append(next)
            else:
                self.__pop()
            next = self.__nextChar()
        if len(self.stack) != 0 or self.rank != 1:
            print("Invalid")
            return False
        else:
            print("Valid")
            return self.revPolishString


obj = Stack("A-(B/C+(D%E*F)/G)*H")
print(obj.getRevPol())
print(obj.rank)
#
