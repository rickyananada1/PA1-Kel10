@extends('masyarakat.master')

@section('title')
@endsection

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Pengumuman</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                padding: 20px;
            }

            .hero-section {
                background-color: #007bff;
                color: #fff;
                text-align: center;
                padding: 80px 0;
                margin-bottom: 40px;
            }

            .hero-section h3 {
                font-size: 32px;
                font-weight: bold;
                margin-bottom: 20px;
            }

            .card {
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                padding: 20px;
                margin-bottom: 20px;
            }

            .card h1 {
                color: #333;
                font-size: 24px;
                margin-bottom: 10px;
            }

            .card p {
                color: #555;
                font-size: 16px;
                line-height: 1.5;
                margin-bottom: 0;
            }
        </style>
    </head>

    <body>

        <div class="container-fluid bg-primary mb-5">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 font-weight-bold text-white">Pengumuman</h3>

            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($pengumuman as $item)
                    <div class="col-md-12">
                        <!-- Modify the column class to occupy the entire row -->
                        <div class="card">
                            <h4 style="font-family: 'Times New Roman', Times, serif">{{ $item->title }}</h4>
                            <p style="font-size: 12px; color: #555;">{{ $item->created_at }}</p>
                            <p>{{ $item->description }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </body>

    </html>
@endsection
