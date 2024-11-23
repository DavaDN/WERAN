<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Web Restoran</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body, html {
            height: 100%;
            background: linear-gradient(135deg, #ff7e5f, #feb47b); /* Gradasi modern */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 100%;
            max-width: 400px;
            background: #fff;
            padding: 30px;
            border-radius: 15px; /* Sudut membulat */
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2); /* Shadow lembut */
            text-align: center;
        }

        .container h2 {
            font-size: 28px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .container p {
            color: #777;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .form-group {
            text-align: left;
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
            display: block;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 10px; /* Sudut membulat */
            outline: none;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: #ff7e5f;
            box-shadow: 0 0 5px rgba(255, 126, 95, 0.5);
        }

        .btn {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            color: white;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: linear-gradient(135deg, #feb47b, #ff7e5f);
        }

        .alert {
            padding: 10px;
            background-color: #f8d7da;
            color: #721c24;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .text-center {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .text-center a {
            color: #ff7e5f;
            text-decoration: none;
            font-weight: bold;
        }

        .text-center a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome to <b>Weran</b></h2>
        @if(session('error'))
        <div class="alert">
            <b>Oops!</b> {{session('error')}}
        </div>
        @endif
        <form action="{{ route('actionlogin') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required="">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required="">
            </div>
            <button type="submit" class="btn">Log In</button>
            <div class="text-center">
                <p>Ga Punya Akun? <a href="register">Register Sekarang!</a></p>
            </div>
        </form>
    </div>
</body>
</html>
