class display:
    x=3
    def display(self, y):
        self.y=y
        print(y)
i=display()
j=display()
i.x=5
print(i.x,j.x)
