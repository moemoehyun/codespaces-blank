<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
     <title>新規登録</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="center-text">
        <h1>新規登録</h1>
    </div>
    <form class="post" action="register_process.php" method="POST">
        <label for="username">ユーザー名:</label>
        <input type="text" name="username" id="username" required>
        <label for="password">パスワード:</label>
        <input type="password" name="password" id="password" required>
        <label for="confirm_password">パスワード確認:</label>
        <input type="password" name="confirm_password" id="confirm_password" required><br>
        <button type="submit">登録</button>

        <a href="login.php">既に登録済みの場合はこちら</a>
    </form>
    
</body>
</html>
