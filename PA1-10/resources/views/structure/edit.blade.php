@extends('admin.master')

@section('title')
    Struktur Pemerintahan
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ url('structure', $structure->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label>Name</label><br>
                <input type="text" name="name" id="name" value="{{ $structure->name }}" class="form-control"><br>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label for="jabatan">Jabatan</label>
                <select name="jabatan" id="jabatan" class="form-control">
                    <option value="">Pilih Jabatan</option>
                    <option value="Kepala Desa" {{ $structure->jabatan == 'Kepala Desa' ? 'selected' : '' }}>Kepala Desa</option>
                    <option value="Sekretaris Desa" {{ $structure->jabatan == 'Sekretaris Desa' ? 'selected' : '' }}>Sekretaris Desa</option>
                    <option value="Badan Permusyawaratan Desa" {{ $structure->jabatan == 'Badan Permusyawaratan Desa' ? 'selected' : '' }}>Badan Permusyawaratan Desa (BPD)</option>
                    <option value="Kasi Pemerintahan" {{ $structure->jabatan == 'Kasi Pemerintahan' ? 'selected' : '' }}>Kasi Pemerintahan</option>
                    <option value="Kasi Kesejahteraan" {{ $structure->jabatan == 'Kasi Kesejahteraan' ? 'selected' : '' }}>Kasi Kesejahteraan</option>
                    <option value="Kasi Pelayanan" {{ $structure->jabatan == 'Kasi Pelayanan' ? 'selected' : '' }}>Kasi Pelayanan</option>
                    <option value="Kaur Tata Usaha" {{ $structure->jabatan == 'Kaur Tata Usaha' ? 'selected' : '' }}>Kaur Tata Usaha</option>
                    <option value="Kaur Keuangan" {{ $structure->jabatan == 'Kaur Keuangan' ? 'selected' : '' }}>Kaur Keuangan</option>
                    <option value="Kepala Dusun I" {{ $structure->jabatan == 'Kepala Dusun I' ? 'selected' : '' }}>Kepala Dusun I</option>
                    <option value="Kepala Dusun II" {{ $structure->jabatan == 'Kepala Dusun II' ? 'selected' : '' }}>Kepala Dusun II</option>
                    <option value="Kepala Dusun III" {{ $structure->jabatan == 'Kepala Dusun III' ? 'selected' : '' }}>Kepala Dusun III</option>
                </select>

                @error('jabatan')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <label>Address</label><br>
                <input type="text" name="address" id="address" value="{{ $structure->address }}" class="form-control">
                @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <br>
                <label>Email</label><br>
                <input type="text" name="email" id="email" value="{{ $structure->email }}" class="form-control">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <br>
                <label>Photo</label><br>
                <input class="form-control" name="image" type="file" id="image"><br>
                <a href="{{ asset('images/structure/' . $structure->image) }}" class="btn btn-info btn-sm"
                    target="_blank">Lihat Gambar</a>
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <br>
                <input type="submit" value="Save" class="btn btn-success my-3"><br>
            </form>
        </div>
    </div>
@endsection
