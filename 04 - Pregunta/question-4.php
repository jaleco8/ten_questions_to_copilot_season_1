<?php
$sql = "SELECT * FROM users WHERE username = ? AND password = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$username, $password]);