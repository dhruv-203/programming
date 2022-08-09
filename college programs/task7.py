class bankacc:
    account_number=4553
    account_holder_name="name"
    balance=544564
    def __init__(self, acc_num, acc_holder_name, balance):
        self.account_number=acc_num
        self.account_holder_name=acc_holder_name
        self.balance=balance
    def withdraw(self, amount):
        if(amount<self.balance):
            self.balance=self.balance-amount
            print("Don't Forget to collect your cash")
        else:
            print("Low Balance!!!")
            
    def deposit(self, amount):
        self.balance=self.balance+amount
        print("Please collect your slip")
        
    def display(self):
        print("Account Number:", self.account_number)
        print("Account Holder Name:",self.account_holder_name)
        print("Your remaining Balance:", self.balance)
acname=input("Enter your Name: ")
acno=input("Enter your Account Number: ")
bal=int(input("Enter your opening balance: "))
per=bankacc(acno, acname, bal)

choice=int(input("Please enter 1 to withdraw cash\nPlease enter 2 to deposit cash\nEnter your choice: "))
if choice==1:
    amo=int(input("Enter the Amount you wish to Withdraw: "))
    per.withdraw(amo)
    per.display()
if choice==2:
    amo=int(input("Enter the Amount you wish to Withdraw: "))
    per.deposit(amo)
    per.display()