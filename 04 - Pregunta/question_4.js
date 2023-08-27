const mysql = require('mysql');
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: 'password',
  database: 'mydatabase'
});

const sql = "SELECT * FROM users WHERE username = ? AND password = ?";
const values = [username, password];

connection.query(sql, values, function (error, results, fields) {
  if (error) throw error;
  console.log(results);
});