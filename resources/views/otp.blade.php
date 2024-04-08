<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>

        <link rel="stylesheet" href="css/otp.css" />
        <link rel="stylesheet" href="send-button.css" />
        <link rel="stylesheet" href="verify-button.css" />
    </head>
    <body>
        <div class="content">
            <h1>Your Content Here</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                bibendum, velit eu interdum congue, nulla augue venenatis massa,
                nec sagittis felis sapien in ligula.
            </p>
        </div>
        <div class="footer">
            <button type="submit">ส่ง</button>
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
