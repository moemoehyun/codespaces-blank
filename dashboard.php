<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<h2>ようこそ、<?php echo htmlspecialchars($_SESSION['username']); ?>さん！</h2>
<p><a href="logout.php">ログアウト</a></p>
