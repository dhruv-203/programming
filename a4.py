# hs="my name is "
# fp=open("hi.txt", "w")
# fp.write(hs+"Dhruv")
# fp.close()
from datetime import datetime
import pytz
import os
current_time=datetime.now(pytz.timezone('Asia/kolkata'))
print(current_time.strftime("%d-%m-%y_%H:%M"))
# for time in pytz.all_timezones:
#     print(time)

# os.mkdir('dhruv', mode=0o666)
# print(os.getcwd()) ##the current current dicrectory dosent changes on using mkdir