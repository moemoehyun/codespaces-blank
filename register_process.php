<?php
session_start();

// DB 接続
require_once 'db.php';  // db.php により、PDO接続が確立される

// フォームからの入力を取得
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// パスワードが一致するか確認
if ($password !== $confirm_password) {
    echo "パスワードが一致しません。";
    exit;
}

// パスワードをハッシュ化
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// ユーザー情報をデータベースに保存
$stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
$stmt->execute(['username' => $username, 'password' => $hashed_password]);

echo "ユーザー登録が完了しました。ログインしてください。";
?>
<a href="login.php">ログイン</a>
