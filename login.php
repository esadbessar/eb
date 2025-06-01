<?php
session_start();

// Gerçek bilgiler
$correctUsername = 'arduino';
$correctPassword = '31';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $correctUsername && $password === $correctPassword) {
        $_SESSION['authenticated'] = true;
        header("Location: esad.php");
        exit();
    } else {
        echo "<script>
                alert('اسم المستخدم أو كلمة المرور غير صحيحة!');
                window.location.href = 'index.html';
              </script>";
    }
}
?>
