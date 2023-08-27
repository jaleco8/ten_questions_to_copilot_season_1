sql = "SELECT * FROM users WHERE username = %s AND password = %s"
cursor.execute(sql, (username, password))