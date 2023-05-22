<!DOCTYPE html>
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
