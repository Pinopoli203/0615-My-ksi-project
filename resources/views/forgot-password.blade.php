<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Setup dasar biar tampilan ke tengah */
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Container utama (Card) */
        .card {
            background: white;
            width: 380px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
        }

        /* Header Ijo sesuai gambar */
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

        /* Form styling */
        form {
            padding: 40px 30px 20px;
        }

        /* Input field biar lonjong dan abu-abu */
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

        /* Tombol SIGN IN */
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
        }

        button:hover {
            background-color: #4cae4c;
            transform: translateY(-2px);
        }

        /* Link bagian bawah */
        .footer-text {
            padding-bottom: 40px;
            font-size: 14px;
            color: #888;
        }

        .footer-text a {
            color: #5cb85c;
            text-decoration: none;
            font-weight: bold;
            display: block;
            margin-top: 10px;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="header-green">
        <h2>Lupa Password</h2>
    </div>

    <form method="POST" action="/forgot-password">
    @csrf
    <input type="email" name="email" placeholder="Email">
    <button type="submit">Kirim Link</button>
</form>
</body>
</html>