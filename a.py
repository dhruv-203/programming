# f=open("att.x")
import os
from datetime import datetime
import pytz
import shutil

def reader():
    buffer=[]
    ref=open("att.txt", "r")
    for x in ref:
        if x=='\n':
            continue
        buffer.append(x)
    writting(buffer) 
#   for y in buffer:
#         print(y)
def writting(buffer):
    f=open("ATTENDANCE.txt", "w")
    tm=1
    for y in buffer:
        if tm<2:
            tm=tm+1
            continue
        print(y)
        choice=input('ENTER THE ANYONE CHOICE FROM BELOW: \nPress P to mark the PRESENT \nPress A to mark the ABSENT\nPress E to leave the attendance Empty\nENTER HERE: ')
        print("\n\n\n")
        if choice=='P' or choice == 'p':
            f.write(y+"\t\tPRESENT\n")
        if choice=='A' or choice=='a':
            f.write(y+"\t\tABSENT\n")    
        if choice=='E' or choice=='e':
            f.write(y+"\t\t\n")
    f.close()
    global old_name 
    old_name=os.getcwd()
    modification()
def modification():
    print("Enter only numeric values !!!!")
    sem=int(input("Enter the Semester of you are taking the attendance: "))
    cdi=int(input("Enter the division of the class: "))
    if sem==1:
        try: os.mkdir('SEMESTER_1')
        except OSError as error:
            pass
        finally:
            os.chdir('SEMESTER_1')
        if cdi==1:
            try: os.mkdir('CS-1')
            except OSError as error:
                pass
            finally:
                os.chdir('CS-1')
            fpath=os.getcwd()
            crtime=datetime.now(pytz.timezone('Asia/Kolkata'))
            fname= (crtime.strftime('%d-%m-%y_%H:%M')+'.txt')
            path=os.path.join(fpath,fname)
            opath=os.path.join(old_name,'ATTENDANCE.txt')
            shutil.move(opath,path)

    # print(os.getcwd())        
    
reader()