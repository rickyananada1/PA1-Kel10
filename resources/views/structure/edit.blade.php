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
                <label for="jabatan">Jabatan</label>
                <select name="jabatan" id="jabatan" value="{{$structure->jabatan}}" class="form-control">
                    <option value="">Pilih Jabatan</option>
                    <option value="Kepala Desa">Kepala Desa</option>
                    <option value="Sekretaris Desa">Sekretaris Desa</option>
                    <option value="Badan Permusyawaratan Desa">Badan Permusyawaratan Desa (BPD)</option>
                    <option value="Kasi Pemerintahan">Kasi Pemerintahan</option>
                    <option value="Kasi Kesejahteraan">Kasi Kesejahteraan</option>
                    <option value="Kasi Pelayanan">Kasi Pelayanan</option>
                    <option value="Kaur Tata Usaha">Kaur Tata Usaha</option>
                    <option value="Kaur Keuangan">Kaur Keuangan</option>
                    <option value="Kepala Dusun I">Kepala Dusun I</option>
                    <option value="Kepala Dusun II">Kepala Dusun II</option>
                    <option value="Kepala Dusun III">Kepala Dusun III</option>
                </select>
                <label>Address</label><br>
                <input type="text" name="address" id="address" value="{{ $structure->address }}"
                    class="form-control"><br>
                <label>Telepon</label><br>
                <input type="text" name="mobile" id="mobile" value="{{ $structure->mobile }}"
                    class="form-control"><br>
                <label>Photo</label><br>
                <input class="form-control" name="image" type="file" id="image"><br>
                <a href="{{ asset('images/structure/' . $structure->image) }}" class="btn btn-info btn-sm"
                    target="_blank">Lihat Gambar</a>
                <br>
                <input type="submit" value="Save" class="btn btn-success my-3"><br>
            </form>
        </div>
    </div>
@endsection
