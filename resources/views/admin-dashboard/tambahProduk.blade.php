@extends('admin-dashboard.layout')

@section('content')
    <div class="col">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ route('tambah-produk') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="foto_produk" class="form-label">Masukan Gambar Produk</label>
                        <input type="file" class="form-control" id="foto_produk" name="foto_produk">
                    </div>
                    <div class="mb-3">
                        <label for="Nama-Produk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="Nama-Produk" name="nama_produk">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Produk Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="name_jurusan">
                    </div>
                    <div class="mb-3">
                        <label for="deskription" class="form-label">deskription Produk </label>
                        <input type="text" class="form-control" id="deskription" name="deskription">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
