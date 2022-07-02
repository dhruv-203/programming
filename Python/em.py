f=open('att.txt', 'r')
buff=f.read()
buff.replace('\n', '  ')
with open("At.txt", "w") as fi:
    fi.write(buff)
fp=open("At.txt", "r")   
wp=fp.readlines()
fp.close()    
for i in range(len(wp)):
    if i==0:
        continue
    else:
        print((wp[i].replace('\n',"")).split())