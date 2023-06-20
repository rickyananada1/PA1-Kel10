@extends('admin.master')

@section('title')
    Struktur Pemerintahan
@endsection

@section('content')
    <div class="card">
        <div class="card-body">

            <form action="/structure" method="post" enctype="multipart/form-data">
                @csrf
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="jabatan">Jabatan:</label>
                <select name="jabatan" id="jabatan" class="form-control">
                    <option value="">Pilih Jabatan</option>
                    <option value="Kepala Desa">Kepala Desa</option>
                    <option value="Sekretaris Desa">Sekretaris Desa</option>
                    <option value="Badan Permusyawaratan Desa">Badan Permusyawaratan Desa (BPD)</option>
                    <option value="Kasi Pemerintahan">Kasi Pemerintahan</option>
                    <option value="Kasi Kesejahteraan">Kasi Kesejahteraan</option>
                    <option value="Kasi Pelayanan">Kasi Pelayanan</option>
                    <option value="Kaur Tata Usaha">Kaur Tata Usaha</option>
                    <option value="Kaur Keuangan">Kaur Keuangan</option>
                    <option value="Kaur Keuangan">Kaur Perencanaan</option>
                    <option value="Kepala Dusun I">Kepala Dusun I</option>
                    <option value="Kepala Dusun II">Kepala Dusun II</option>
                    <option value="Kepala Dusun III">Kepala Dusun III</option>
                </select>
                @error('jabatan')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label>Address</label></br>
                <input type="text" name="address" id="address" class="form-control"></br>
                @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>Email</label></br>
                <input type="text" name="email" id="email" class="form-control"></br>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <input class="form-control" name="image" type="file" id="image">
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@endsection
