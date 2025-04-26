<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
</head>
<body>
    <h1>ログイン</h1>
    <form action="login_process.php" method="POST">
        <label for="username">ユーザー名:</label>
        <input type="text" name="username" id="username" required><br><br>
        <label for="password">パスワード:</label>
        <input type="password" name="password" id="password" required><br><br>
        <button type="submit">ログイン</button>
    </form>
    <a href="register.php">新規登録</a>
</body>
</html>
