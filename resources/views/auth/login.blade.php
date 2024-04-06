<html>

<head>
    <meta charset="utf-8">
    <title>Clicknext: login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="login-root">
        <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
            <div class="formbg-outer">
                <div class="formbg">
                    <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
                        <img src="https://lh6.googleusercontent.com/proxy/cyexBRM7hR7vutWwKF2RncwXo81OWRVgm-qmb8wGuaNlSRvGG7Z4uQTMQQcpFy0y4d7iA3i-RPj1UT8cxYDyBYER46U4rGqcqR5t-bLdGesNiA" alt="" class="logoclicknext">
                        <h1><a href="" rel="dofollow">Clicknext</a></h1>
                    </div>

                    <div class="formbg-inner padding-horizontal--48">
                        <span class="padding-bottom--15">Login</span>

                        <form id="stripe-login" action = "/login" method = "POST">
                            @csrf
                            <div class="field padding-bottom--24">
                                <label class="font-text" for="email">อีเมล</label>
                                <input type="email" name="email" placeholder="username@gmail.com" required>
                            </div>
                            <div class="field padding-bottom--24">
                                <div class="grid--50-50">
                                    <label class="font-text" for="password">รหัสผ่าน</label>
                                </div>
                                <input type="password" name="password" placeholder="Password" required>
                            </div>

                            <div class="field padding-bottom--24">
                                <input type="submit" name="submit" value="เข้าสู่ระบบ">
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</body>

</html>
