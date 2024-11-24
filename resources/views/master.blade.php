<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WERAN - Web Restoran</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        /* General Reset */
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Georgia', serif;
            background: url('https://source.unsplash.com/1920x1080/?restaurant,dining') no-repeat center center/cover;
            color: #333;
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.9);
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
        }

        .navbar-brand {
            font-family: 'Georgia', serif;
            font-size: 24px;
            color: #d35400 !important; /* Oranye hangat */
            font-weight: bold;
        }

        .navbar-brand:hover {
            color: #e67e22 !important;
        }

        .navbar-nav > li > a {
            font-size: 16px;
            color: #333 !important;
            font-weight: bold;
            transition: color 0.3s;
        }

        .navbar-nav > li > a:hover {
            color: #d35400 !important;
        }

        .dropdown-menu {
            background-color: white;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .dropdown-menu > li > a {
            font-size: 14px;
            color: #333;
            padding: 10px 20px;
            transition: background 0.3s, color 0.3s;
        }

        .dropdown-menu > li > a:hover {
            background-color: #d35400;
            color: white;
        }

        .container {
            margin-top: 80px;
        }

        .content {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
        }

        .footer {
            text-align: center;
            padding: 10px 0;
            background: rgba(255, 255, 255, 0.8);
            position: fixed;
            bottom: 0;
            width: 100%;
            color: #555;
            font-size: 14px;
        }

        .footer a {
            color: #d35400;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('home')}}">WERAN - Web Restoran</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <!-- Menu Kategori -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Kategori <span class="caret"></span>
                        </a>
                    </li>
                    <!-- Menu Utama -->
                    <li><a href="/menu/tampil">Menu</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::check())
                    <!-- Menu untuk Pengguna Login -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i> {{Auth::user()->email}} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a>Level: {{Auth::user()->role}}</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{route('actionlogout')}}"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                    @else
                    <!-- Menu Login/Register untuk Guest -->
                    <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href="{{route('register')}}">Register</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="content">
            @yield('konten')
        </div>
    </div>
    <div class="footer">
        <p>© 2024 WERAN. Built by <a href="https://github.com/DavaDN">Dava</a>.</p>
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>
