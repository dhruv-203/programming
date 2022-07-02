import os 
from datetime import datetime
import pytz
import shutil
pa=os.getcwd()
olpa=os.path.join(pa,'Attendance.txt')
# print(olpa)
curtime=datetime.now(pytz.timezone('Asia/Kolkata'))
ap=(curtime.strftime('%d-%m-%y_%H:%M')+'.txt')
os.chdir('SEMESTER_1/CS-1')
neap=os.path.join(os.getcwd(),ap)
os.chdir('../')
os.chdir('../')
shutil.move(olpa,neap)


# rename