<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録</title>
</head>
<body>
    <h1>新規登録</h1>
    <form action="register_process.php" method="POST">
        <label for="username">ユーザー名:</label>
        <input type="text" name="username" id="username" required><br><br>
        <label for="password">パスワード:</label>
        <input type="password" name="password" id="password" required><br><br>
        <label for="confirm_password">パスワード確認:</label>
        <input type="password" name="confirm_password" id="confirm_password" required><br><br>
        <button type="submit">登録</button>
    </form>
    <a href="login.php">ログイン</a>
</body>
</html>
