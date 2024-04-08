<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Email</title>
</head>
<body>
    <h2>Enter Email</h2>
    <form action="{{ route('send-otp') }}" method="post">
        @csrf 
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Send OTP">
    </form>
</body>
</html>