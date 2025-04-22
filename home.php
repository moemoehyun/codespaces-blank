<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
echo "ようこそ、" . htmlspecialchars($_SESSION['user']) . "さん！";
?>
<br><a href="logout.php">ログアウト</a>
