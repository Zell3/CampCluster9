<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter OTP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="send-button.css">
    <link rel="stylesheet" href="verify-button.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="content">
        <h2>Enter OTP</h2>
        <form action="/verify-otp" method="post">
            @csrf 
            <label for="email">Email:</label><br>
            <!-- แสดงช่องในการกรอกอีเมล์ -->
            <input type="email" id="email" name="email" value="{{ isset($email) ? $email : '' }}" required><br><br>
            <label for="otp">OTP:</label>
            <input type="text" id="otp" name="otp">
            <button type="submit" class="verify-button">Verify OTP</button>
        </form>
    </div>

    <div class="footer">
        <form action="/resend-otp" method="post">
            @csrf
            <!-- ใช้งานข้อมูลอีเมล์จากฐานข้อมูลในการแสดงช่อง -->
            <input type="hidden" name="email" value="{{ isset($email) ? $email : '' }}">
            <button type="submit" class="send-button">Resend OTP</button>
        </form>
    </div>

    <div id="otpPopup" class="popup">
        <div class="popup-content">
            <h3>ยืนยันรหัสอีเมล</h3>
            <h4>เราได้ดำเนินการส่งหมายเลข OTP ไปที่</h4>
            <h4>อีเมล :</h4>
            <div class="otp-input">
                <input type="text" maxlength="1" class="otp-field" />
                <input type="text" maxlength="1" class="otp-field" />
                <input type="text" maxlength="1" class="otp-field" />
                <input type="text" maxlength="1" class="otp-field" />
                <input type="text" maxlength="1" class="otp-field" />
                <input type="text" maxlength="1" class="otp-field" />
            </div>
            <div class="link-container">
                <a href="#" OnClick="">ส่ง OTP อีกครั้ง  <i class="fa-solid fa-arrow-rotate-right"></i></a>
            </div>
            <br>
            <br>
            <button id="verifyOtp" type="submit">ยืนยัน</button>
        </div>
    </div>

    <script src="emailotp.js"></script>
    <script>
        const submitButton = document.querySelector(
            'button[type="submit"]'
        );
        const otpPopup = document.getElementById("otpPopup");
        const otpFields = document.querySelectorAll(".otp-field");

        submitButton.addEventListener("click", () => {
            otpPopup.style.display = "block";
        });

        otpFields.forEach((field, index) => {
            field.addEventListener("input", () => {
                if (field.value.length === 1) {
                    if (index < otpFields.length - 1) {
                        otpFields[index + 1].focus();
                    } else {
                        field.blur();
                    }
                } else if (field.value.length === 0 && index > 0) {
                    otpFields[index - 1].focus();
                }
            });
        });
    </script>
</body>
</html>
