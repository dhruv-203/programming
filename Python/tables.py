# a program that asks user for a number and returns the table of that number and stores it in a file
import time
class table:
    def __init__(self):
        try:
            self.number=int(input("Enter a Number"))
        except ValueError :
            print("Please Enter a Valid Integer")
            self.__init__()
        self.choice()
        # self.choice=input("Enter store to save the output in a file or show to just display: ")
    def calculation(self):
        buffer=[]
        for x in range(1,11):
            buffer.append("%d X %d = %d"%(self.number,x,self.number*x))
        return buffer
    def history(self):
        f=open("tables.txt","r")
        buffer=f.read()
        print("HISTORY:\n")
        print(buffer)
        ask=input("press yes to again select number or no to stop")
        if ask=="yes":
            self.__init__()
        else:
            return ask
        
    def choice(self):
        choice=input("Enter store to display as well as store the output in a file or enter display to just show the output or enter history to watch past stored outputs: ")        
        if choice!="store" and choice!="display" and choice!="history":
            print("Please Enter a Valid Input...")
            self.choice()
        elif choice=="store" or choice=="display":
            buff=self.calculation()
            for x in buff:
                print(x)
            if choice=="store":    
                print("storing the output.....")
                time.sleep(2)
                f=open("tables.txt","a+")
                f.write("Table of %d"%self.number)
                f.write("\n\n")
                for x in buff:
                    f.write("%s\n"%x)
                f.write("\n\n")
                f.close()
        elif choice=="history":
            ks=self.history()
        if ks!="yes":
            return
        ask=input("Enter yes to get output for another number or no exit")
        if ask=="yes":
            self.__init__()
        else:
            print("End of The Progrom Don't forget to Check the file")    

obj=table()