<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
      /* Add custom styles here */
      body {
        background-color: #f8f9fa;
      }
      .container {
        margin-top: 50px;
      }
      .card {
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
      }
      .form-label {
        font-weight: bold;
      }
      .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
      }
      .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1 class="text-center mb-5">Berita</h1>
      <a href="{{ route('berita.index') }}" class="btn btn-primary btn-sm mb-3"><i class="bi bi-arrow-left"></i>Data Berita</a>
      <div class="card">
        <div class="card-body">
          <form action="{{route('berita.store')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="judul" class="form-label">Judul</label>
              <input type="text" class="form-control" name="judul" id="judul">
            </div>
            <div class="mb-3">
              <label for="isi" class="form-label">Isi</label>
              <textarea type="text" class="form-control" name="isi" id="isi" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary float-end">Simpan</button>
          </form>
        </div>
      </div>
    </div>
    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
  </body>
</html>
