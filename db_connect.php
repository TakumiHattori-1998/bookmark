<?php
$dsn = 'mysql:host=your_server;dbname=your_db;charset=utf8mb4';
$username = 'your_name';
$password = 'your_password';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage();
    exit();
}
?>