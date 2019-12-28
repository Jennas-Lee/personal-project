# -*-coding utf-8-*-
# score.py

import pymysql

# mysql connect
conn = pymysql.connect(host='localhost', user='root', password='root1234', database='contest', charset='utf8')
curs = conn.cursor()

# sql query execute
sql = 'SELECT * FROM `member`'
curs.execute(sql)

# data fetch
rows = curs.fetchall()
print(rows)

# connect close
conn.close()

# INSERT INTO `member` (`id`, `name`, `year`, `pw`, `num_1`, `num_2`, `num_3`, `email`, `rating`, `tier`) VALUES ('bi0416', '이승준', '1기', 'tmdwns0416', '010', '4518', '9755', 'leezeunjun@gmail.com', '2560', 'Gold');
