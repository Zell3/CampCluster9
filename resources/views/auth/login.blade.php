<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clicknext: Login</title>
    <!-- Include your CSS file -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <!-- Add a favicon if necessary -->
    <!-- <link rel="icon" href="favicon.ico"> -->
</head>

<body>
    <!-- Main container -->
    <div class="login-root">
        <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
            <div class="formbg-outer">
                <div class="formbg">
                    <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
                        <!-- Use appropriate alt text for the image -->
                        <img src="https://lh6.googleusercontent.com/proxy/cyexBRM7hR7vutWwKF2RncwXo81OWRVgm-qmb8wGuaNlSRvGG7Z4uQTMQQcpFy0y4d7iA3i-RPj1UT8cxYDyBYER46U4rGqcqR5t-bLdGesNiA" alt="Clicknext Logo" class="logoclicknext">
                        <!-- Wrap your logo in an anchor tag -->
                        <h1><a href="#" rel="dofollow">Clicknext</a></h1>
                    </div>

                    <div class="formbg-inner padding-horizontal--48">
                        <span class="padding-bottom--15">Login</span>

                        <!-- Start of login form -->
                        <form action="{{ url('login-check') }}" method="POST">
                            <!-- CSRF protection -->
                            @csrf
                            <!-- Email input field -->
                            <div class="field padding-bottom--24">
                                <label class="font-text" for="email">อีเมล</label>
                                <input type="email" name="email" placeholder="username@gmail.com" required>
                            </div>
                            <!-- Password input field -->
                            <div class="field padding-bottom--24">
                                <div class="grid--50-50">
                                    <label class="font-text" for="password">รหัสผ่าน</label>
                                </div>
                                <input type="password" name="password" placeholder="Password" required>
                            </div>
                            <!-- Submit button -->
                            <div class="field padding-bottom--24">
                                <input type="submit" name="submit" value="เข้าสู่ระบบ">
                            </div>
                        </form>
                        <!-- End of login form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of main container -->
</body>

</html>
