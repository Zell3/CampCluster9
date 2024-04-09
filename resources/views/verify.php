<?php
session_start();

$servername = "localhost";
$username = "laravel_user";
$password = "l@ravel_password";
$dbname = "laravel_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email_name'];
$otp = $_POST['email_otp'];

if ($otp === $_SESSION['otp']) {
    $sql = "SELECT * FROM emails WHERE email_name='$email' AND email_otp='$otp'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // ถ้ามีข้อมูลที่ตรงกัน ให้ทำตามขั้นตอนต่อไป
        // เช่นเปลี่ยนสถานะการใช้งานของ OTP หรืออื่น ๆ
        // ส่งไปหน้าที่คุณต้องการ
        return redirect('/login');
    } else {
        echo "Invalid email or OTP.";
    }
} else {
    echo "Invalid OTP.";
}

$conn->close();
?>