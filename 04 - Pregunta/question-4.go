sql := "SELECT * FROM users WHERE username = ? AND password = ?"
stmt, err := db.Prepare(sql)
rows, err := stmt.Query(username, password)