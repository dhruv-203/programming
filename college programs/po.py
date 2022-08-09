import shutil
import os

olpath=os.getcwd()
opath=os.path.join(olpath,'ATTENDANCE.txt')
# npath=/home/202103103510445/Documents/Python_trials/SEMESTER_1/CS-1
os.chdir('SEMESTER_1/CS-1')
# print(os.getcwd())
npath=os.path.join(os.getcwd(),'dhruv.txt')
shutil.move(opath,npath)