global f,buffer,lst
lst=['!','~','`','@','#','$','%','^','&','*','_','-','=','+',':',';','"','<',',','>','.','/','?','*','|','\\','*','(',")",'[',']',"{",'}']
fname=input("Enter the File name with extension you want to perform the program: ")
f=open(fname,'r')
buffer=f.read().lower()
f.close()
for x in lst:
    buffer=buffer.replace(x, " ").replace('  ', ' ')
buffer=buffer.split()


def look():
    # f=open("task6.txt","r")
    # buffer=f.read()
    global buffer
    
    # print(buffer)
    
    word=input("Enter the word You're searching for: ")
    return buffer.count(word),word
def freq():
    global buffer
    
    com=[]
    for x in buffer:
        tmp=buffer.count(x)
        # for p in range(len(buffer)):
        #     if x==buffer[p]:
        #         tmp=tmp+1
        if tmp>0:
            flag=True
            for z in range(len(com)):
                if x==com[z][0]:
                    flag=False
                    break
            if flag:
                com.append([x,tmp])
    return com            

def max():
    global buffer
    large=[0,0]
    for x in buffer:
        tmp=buffer.count(x)
        if tmp>large[1]:
                    large[0]=x
                    large[1]=tmp    
    return large
   
                

          
            
        
    # print(buffer)    
    
choice=int(input("Enter the choice you want to perform: \n1. Press 1 to look the number of occurrence for a word\n2. Press 2 for frequency of each word\n3. Press 3 for Highest Frequency Word\nEnter Your Choice Here: "))    
if choice==1:
    ans=look()
    print('The %s Repeats %d times'%(ans[1],ans[0]))
if choice==2:
    ans=freq()
    for x in ans:
        print("the element",x[0],"repeats",'%d times'%(x[1]))
if choice==3:
    ans=max()
    print('The most Repeating word is "%s" and its repeated %d times'%(ans[0],ans[1]))