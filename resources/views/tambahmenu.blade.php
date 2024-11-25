@section('konten')
<a href="/menu/tampil" class="btn btn-light">
  <i class="fa fa-arrow-left"></i> Kembali</a>
<h3>Form Input Menu</h3>
<form action="{{route('simpanMenu')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="gambar">Gambar</label>
    <input type="file" accept="image/png, image/jpeg, image/jpg" name="gambar">
  </div>
  <div class="form-group">
    <label>Nama Menu</label>
    <input type="text" name="nama" class="form-control" placeholder="Nama menu" required="">
  </div>
  <div class="form-group">
    <label>Jenis</label>
    <br>
    <select name="jenis" id="jenis">
      <option value="Main Course">Main Course</option>
      <option value="Appetizer">Appetizer</option>
      <option value="Desert">Desert</option>    
      <option value="Beverage">Beverage</option>
  </select>
  </div>
  <div class="form-group">
    <label>Harga</label>
    <input type="number" name="harga" class="form-control" placeholder="Harga" required="">
  </div>

  <div class="form-group text-right">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
  </div>
</form>
@endsection

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
