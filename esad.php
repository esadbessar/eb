<?php
session_start();
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <title>مرحبا بك</title>
</head>
<body>
  <h1>أهلاً وسهلاً، لقد سجلت الدخول بنجاح!</h1>
  <a href="logout.php">تسجيل الخروج</a>
</body>
</html>
