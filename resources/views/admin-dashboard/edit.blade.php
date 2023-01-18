@extends('admin-dashboard.layout')

@section('content')
    <div class="col">
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Produk</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="foto_produk" class="form-label">Masukan Gambar Produk</label>
                                <input type="file" class="form-control" id="foto_produk" name="foto_produk"
                                    value="foto_produk">
                            </div>
                            <div class="mb-3">
                                <label for="Nama-Produk" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" id="Nama-Produk" name="nama_produk"
                                    value="name_produk">
                            </div>
                            <div class="mb-3">
                                <label for="jurusan" class="form-label">Produk Jurusan</label>
                                <input type="text" class="form-control" id="jurusan" name="name_jurusan"
                                    value="name_jurusan">
                            </div>
                            <div class="mb-3">
                                <label for="deskription" class="form-label">deskription Produk </label>
                                <input type="text" class="form-control" id="deskription" name="deskription"
                                    value="deskription">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
