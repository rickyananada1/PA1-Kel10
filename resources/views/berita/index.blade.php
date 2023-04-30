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
        <h1 class="text-center mb-5"> Film </h1>
        <a href="{{route('berita.create')}}" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th width="5%">NO</th>
                        <th width="15%">Judul</th>
                        <th width="70%">Isi</th>
                        <th width="10%">Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($berita as $no=>$hasil)
                            <tr>
                                <th>{{ $no+1}}</th>
                                <td>{{$hasil->judul}}</td>
                                <td>{{$hasil->isi}}</td>
                                <td>
                                    <form action="{{ route('berita.destroy', $hasil->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('berita.edit' , $hasil->id)}}" class="btn btn-success btn-sm">Edit</a>
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
