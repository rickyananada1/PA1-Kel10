@extends('admin.master')

@section('title')
    Surat Permohonan
@endsection

@push('css')
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet" />
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });

        // Fungsi untuk menampilkan SweetAlert
        function showSwal(title, message, type) {
            Swal.fire({
                title: title,
                text: message,
                icon: type,
                confirmButtonText: 'OK'
            });
        }

        // Fungsi untuk menampilkan alert SweetAlert
        function showSweetAlert(message, type) {
            Swal.fire({
                title: '',
                text: message,
                icon: type,
                showConfirmButton: false,
                timer: 2000
            });
        }
    </script>
@endpush

@section('content')
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>Nama Pemohon</th>
                        <th>Tanggal Request</th>
                        <th>Status</th>
                        <th>Aksi</th>
                        <th>Verifikasi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($surat as $tt)
                        <tr>
                            <td>{{ $tt->name }}</td>
                            <td>{{ $tt->created_at }}</td>
                            <td>
                                @if ($tt['status'] == 1)
                                    Diterima
                                @elseif ($tt['status'] == 2)
                                    Ditolak
                                @else
                                    Menunggu
                                @endif
                            </td>
                            <td>
                                <a href="{{Route('viewSurat', ["id" => $tt->id ])}}">
                                    <i class="fas fa-eye"></i>Lihat
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('aprovesurat', ['id'=> $tt->id ]) }}" method="POST">
                                    @csrf
                                    @if ($tt['status'] == 0)
                                        <button type="submit" name="status" value="approve" class="btn btn-success" onclick="showSweetAlert('Surat telah diapprove.', 'success')">Approve</button>
                                        <button type="submit" name="status" value="reject" class="btn btn-danger" onclick="showSweetAlert('Surat telah ditolak.', 'error')">Reject</button>
                                    @elseif ($tt['status'] == 1)
                                        <button type="submit" class="btn btn-success" disabled>Approve</button>
                                        <button type="submit" class="btn btn-danger" disabled>Reject</button>
                                    @elseif ($tt['status'] == 2)
                                        <button type="submit" class="btn btn-success" disabled>Approve</button>
                                        <button type="submit" class="btn btn-danger" disabled>Reject</button>
                                    @endif
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">Data Tidak Ada</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
