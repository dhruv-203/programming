class arithmetic:
    def inp(self):
        self.li=[]
        self.flag=True
        print('press exit() to stop entering input')
        while self.flag:
            self.p=input('ENTER a NUMBER:')
            if(self.p=='exit()'):
                break
            self.li.append(int(self.p))
        self.__decision()
    
    def __decision(self):
        self.deci=int(input('Choose from the following options:\n1. Press 1 for addition'))
        if self.deci==1:
            self.__add()

    def __add(self):
        # print('hi')
        self.sum=0

        for self.i in range(0,len(self.li)):

            self.sum=self.sum+self.li[self.i]

        print(self.sum)

i=arithmetic()
i.inp()


