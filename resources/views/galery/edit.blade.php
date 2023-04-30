<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Upload Gambar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        main {
            margin: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type=file] {
            display: block;
            margin-bottom: 10px;
        }

        input[type=submit] {
            background-color: #333;
            border: none;
            color: #fff;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <header>
        <h1>Admin Upload Gambar</h1>
    </header>
    <main>
        <form action="{{route('galery.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="gambar">Pilih Gambar:</label>
            <input type="file" id="gambar" name="gambar" accept="image/*">
            <input type="submit" value="Unggah">
        </form>
    </main>
</body>

</html>
