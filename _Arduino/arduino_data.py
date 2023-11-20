import serial
import MySQLdb
from datetime import datetime

port = serial.Serial("/dev/ttyACM0", "9600")

db = MySQLdb.connect("118.44.43.210","admin","2794","db")
curs = db.cursor()

while True:
	try:
		now = datetime.now()
		print("nowimte : ", now.time())
		data = port.readline()
		print("PM_data: ")
		print(data.decode('utf-8'))
	
		curs.executemany("""INSERT INTO pm_data (pm) VALUES(%s)""", [(float(data.decode('utf-8')))])
		db.commit()


	except KeyboardInterrupt:
		break
port.close()
db.close()
