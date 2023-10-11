
</html>
    <!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>
<body>
<div class="login-container">
    <div class="image-container">
        <img src="https://phela.vn/wp-content/uploads/2021/11/web.jpg" alt="Background">
    </div>
    <div class="form-container">
        <h1>Đăng Nhập</h1>
        <form  method="POST" action="{{route('customers.loginProcess')}}">
            @csrf
            <div class="input-container">
                <label for="username">Email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="input-container">
                <label for="password">Mật khẩu:</label>
                <input type="password"  name="password" required>
            </div>
            <button type="submit">Đăng Nhập</button>
        </form>
    </div>
</div>
</body>
</html>
