<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            color: #6c757d;
        }

        textarea {
            resize: none;
        }
    </style>
</head>

<body>

    <div class="container my-5">
        <h1 class="text-center mb-5"> Edit Berita </h1>
        <a href="{{ route('berita.index') }}" class="btn btn-danger btn-sm mb-3"><i
                class="bi bi-arrow-left"></i>Kembali</a>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('berita.update', $berita->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" value="{{ $berita->judul }}"
                            id="judul">
                    </div>
                    <div class="mb-3">
                        <label for="isi" class="form-label">Isi</label>
                        <textarea type="text" class="form-control" name="isi" id="isi" style="height:300px">{{ $berita->isi }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
