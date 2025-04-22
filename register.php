<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $db->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $stmt->bindValue(':username', $username, SQLITE3_TEXT);
    $stmt->bindValue(':password', $password, SQLITE3_TEXT);

    try {
        $stmt->execute();
        echo "登録完了！<a href='login.php'>ログインへ</a>";
    } catch (Exception $e) {
        echo "登録失敗：" . $e->getMessage();
    }
}
?>
<form method="POST">
    <input name="username" required placeholder="ユーザー名">
    <input type="password" name="password" required placeholder="パスワード">
    <button type="submit">登録</button>
</form>
