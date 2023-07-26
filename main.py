import mysql.connector

mydb = mysql.connector.connect(
    host = 'localhost',
    user = 'root',
    password = '',
    port = '3306',
    database = 'api'
)

mycursor = mydb.cursor()
mycursor.execute('SELECT * FROM posts')
posts = mycursor.fetchall()
for post in posts :
    print('Title : ' + post[1])
    print('Body : ' + post[2])
    print('Author : ' + post[3])
    print('Created date : ' + post[4].strftime('%d/%m/%Y'))
    print('Updated date : ' + post[5].strftime('%d/%m/%Y'))
