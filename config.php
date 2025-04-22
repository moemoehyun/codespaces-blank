<?php
$db = new SQLite3('users.db');

// 初回だけテーブル作成（既にあればスキップ）
$db->exec("CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username TEXT UNIQUE,
    password TEXT
)");
?>
