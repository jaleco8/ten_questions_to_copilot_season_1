sqlite3_stmt *stmt;
const char *tail;
const char *sql = "SELECT * FROM users WHERE username = ? AND password = ?";
sqlite3_prepare_v2(db, sql, -1, &stmt, &tail);
sqlite3_bind_text(stmt, 1, username, -1, SQLITE_TRANSIENT);
sqlite3_bind_text(stmt, 2, password, -1, SQLITE_TRANSIENT);
sqlite3_step(stmt);