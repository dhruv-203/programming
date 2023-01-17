# finding second minimum element from an array 
def takeInputs()->list :
    arr = []
    check = True
    while check:
        try:
            temp = input("Enter a Number : ")
            if temp == "exit()":
                break
            temp = int(temp)
            arr.append(temp)
        except ValueError:
            print("Please Enter a Valid INTEGER")
            continue
    return arr

def minimumCal(arr)->int:
    small = arr[0]
    for i in range(1,(len(arr)-1)):
        if small > arr[i]:
            small = arr[i]
            print(small)
        else:
            pass
    return small

def pairing(arr):
    print("INside pairing")
    if len(arr)%2!=0 :
        return False
    newArr = []
    for i in range(0,len(arr),2):
        newArr.append([arr[i],arr[i+1]])
    return newArr

def secondMin(chota:int, arr:list,extraArr)->int:
    temp = arr
    num = False
    while len(temp)>1:
        print("SecondMin while loop",temp)
        if len(temp)%2!=0:
            num = temp.pop(-1)
        else:
            num = False
        newArr = pairing(temp)
        print("Calling after pairing", newArr)
        nextRound = []
        for i in newArr:
            print("Inside of For loop")
            nextRound.append(min(i))
            try :
                i.remove(chota)
                extraArr.append(i[0])
            except ValueError:
                pass
        temp = nextRound
        if num!=False:
            temp.append(num)
    print("While Ended")
    print(min(extraArr), temp)
    return min(extraArr)

MyArr = takeInputs();
small = minimumCal(MyArr)

print("Minimum Acquired "+str(small))
# print(pairing(MyArr))

print(secondMin(small,MyArr,[]))



# small = min(MyArr)
# check = True
# print(MyArr)
# while check :
#     # print("inside")
#     try:
#         MyArr.remove(small)
        
#     except ValueError:
#         check = False
# print(min(MyArr), MyArr)
