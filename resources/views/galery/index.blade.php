<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5"> Galery </h1>
        <a href="{{route('galery.create')}}" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>NO</th>
                        <th>Gambar</th>
                        <th>Nama Gambar</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($galery as $no=>$hasil)
                            <tr>
                                <th>{{ $no+1}}</th>
                                <td>{{$hasil->gambar}}</td>
                                <td>{{$hasil->nama_gambar}}</td>
                                <td>
                                    <form action="{{ route('galery.destroy', $hasil->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('galery.edit' , $hasil->id)}}" class="btn btn-success btn-sm">Edit</a>
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
