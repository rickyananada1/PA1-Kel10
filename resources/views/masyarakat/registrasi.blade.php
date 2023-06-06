{{-- <!DOCTYPE html>
<html>

<head>
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h2>Form Registrasi</h2>
        <form action="{{url('masyarakat/register')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nik">NIK:</label>
                <input type="text" class="form-control" name="nik" id="nik" placeholder="Masukkan NIK">
            </div>
            @error('nik')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama">
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email">
            </div>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
            </div>
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="password">Konfirmasi Password</label>
                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Masukkan Password">
            </div>
            @error('confirm_password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Memasukkan library JavaScript dari Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
--}}


<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group .alert {
            margin-top: 10px;
            margin-bottom: 0;
        }

        .form-group .close {
            outline: none;
            border: none;
            background-color: transparent;
            color: #000;
            opacity: 0.5;
            cursor: pointer;
        }

        .form-group .close:hover {
            opacity: 1;
        }

        .btn-primary {
            width: 100%;
        }

        p {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Registrasi</h2>

        <form action="{{url('masyarakat/register')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nik">NIK:</label>
                <input type="text" class="form-control" name="nik" id="nik" placeholder="Masukkan NIK">
            </div>
            @error('nik')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama">
            </div>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email">
            </div>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
            </div>
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="password">Konfirmasi Password</label>
                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Masukkan Password">
            </div>
            @error('confirm_password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
