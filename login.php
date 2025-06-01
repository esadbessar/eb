<?php
session_start();

// Doğru kullanıcı adı ve şifre
$correctUsername = 'arduino';
$correctPassword = '31';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $correctUsername && $password === $correctPassword) {
        $_SESSION['authenticated'] = true;

        // Giriş başarılıysa esad.html'e yönlendir
        header("Location: esad.html");
        exit();
    } else {
        // Giriş başarısızsa uyarı göster ve geri dön
        echo "<script>
                alert('اسم المستخدم أو كلمة المرور غير صحيحة!');
                window.location.href = 'index.html';
              </script>";
    }
}
?>
