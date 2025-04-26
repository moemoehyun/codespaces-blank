<!DOCTYPE html>
<html lang="ja">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
     <title>ログイン</title>
</head>

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
    <?php include 'header.php'; ?>

    <div class="center-text">
        <h1>ログイン</h1>
    </div>
    <form class="post" action="login_process.php" method="POST">
        <label for="username">ユーザー名:</label>
        <input type="text" name="username" id="username" required>
        <label for="password">パスワード:</label>
        <input type="password" name="password" id="password" required><br>
        <button type="submit">ログイン</button>

        <a href="register.php">新規登録はこちら</a>
    </form>
    
</body>
</html>
