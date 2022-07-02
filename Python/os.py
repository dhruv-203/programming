import os
from datetime import datetime
import pytz
import shutil
# os.chdir('../')

# os.chdir('python/notes')
old_name=os.getcwd()
print(os.getcwd())
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
            opath=os.path.join(old_name,'Attendance.txt')
            shutil.move(opath,fname)
            

# print(os.getcwd())  