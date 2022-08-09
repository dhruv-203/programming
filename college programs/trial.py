class bank:
    def __init__(self,bank_balance,bank_holder,bank_accountno):
        self.bank_balance = bank_balance
        self.bank_holder = bank_holder
        self.bank_accountno = bank_accountno

    def depositbalance(self,deposit):

        self.bank_balance+=deposit
        print(f"the current amount is {self.bank_balance}")
    
    def withdrawlbalance(self,withdrawl):
        if self.bank_balance < withdrawl:
            print("you not have enough money")
        else:
            self.bank_balance-=withdrawl
            print(f"After withdraw minimum balance is {self.bank_balance}")
    def display(self):
        print(f"Name : {self.bank_holder}")
        print(f"Bank account number : {self.bank_accountno}")
        print(f"Bamk balance : {self.bank_balance}")


bank_holder=input("enter the name : ")
bank_accountno=int(input("enter the account number : "))
bank_balance=float(input("enter the balance you have : "))

o=bank(bank_balance, bank_holder, bank_accountno)

print("***********\n")
deposit =int(input("enter the number you have deposit : "))
o.depositbalance(deposit)

print("***********\n")
withdrawl =int(input("enter the number you have to withdraw : "))
o.withdrawlbalance(withdrawl)

print("***********\n")
o.display()