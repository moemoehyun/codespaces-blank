<?php
session_start();

// DB 接続
require_once 'db.php';  // db.php により、PDO接続が確立される

// フォームからの入力を取得
$username = $_POST['username'];
$password = $_POST['password'];

// ユーザーをデータベースで検索
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
$stmt->execute(['username' => $username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// パスワードが一致するか確認
if ($user && password_verify($password, $user['password'])) {
    // セッションにユーザー情報を格納
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    header("Location: dashboard.php"); // ログイン後のページ
    exit;
} else {
    echo "ユーザー名またはパスワードが間違っています。";
}
?>

<br><a href="logout.php">ログアウト</a>
