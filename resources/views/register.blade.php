<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        /* CSS-nya sama biar konsisten */
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background: white;
            width: 380px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
        }

        .header-green {
            background-color: #5cb85c;
            padding: 40px 20px;
            color: white;
        }

        .header-green h2 {
            margin: 0;
            font-size: 28px;
            letter-spacing: 1px;
        }

        form {
            padding: 40px 30px 20px;
        }

        input[type="text"], 
        input[type="password"] {
            width: 100%;
            padding: 15px 20px;
            margin-bottom: 20px;
            border: none;
            background-color: #ececec;
            border-radius: 50px;
            box-sizing: border-box;
            outline: none;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 15px;
            background-color: #5cb85c;
            border: none;
            border-radius: 50px;
            color: white;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
            text-transform: uppercase;
        }

        button:hover {
            background-color: #4cae4c;
            transform: translateY(-2px);
        }

        .footer-text {
            padding-bottom: 40px;
            font-size: 14px;
            color: #888;
        }

        .footer-text a {
            color: #5cb85c;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="header-green">
        <h2>Register</h2>
    </div>

    <form method="POST" action="/register">
        @csrf
        <input type="text" name="username" placeholder="Username" required>
        <input type="text" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
        <button type="submit">DAFTAR</button>
    </form>

    <div class="footer-text">
        Sudah punya akun? 
        <a href="/login">Login di sini</a>
    </div>
</div>

</body>
</html>