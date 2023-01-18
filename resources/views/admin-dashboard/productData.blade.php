@extends('admin-dashboard.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <a class="btn btn-success mb-3" href="/tambahProduk">Tambah Produk</a>
            </div>
        </div>
    </div>
    <div class="col">
        @if (session('notAllowed'))
            <div class="alert alert-danger">
                {{ session('notAllowed') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('delete'))
            <div class="alert alert-success">
                {{ session('delete') }}
            </div>
        @endif
    </div>
    <div class="container">
        <div class="row">
            @foreach ($tefas as $item)
                <div class="col-md-4 mt-2">
                    <div class="card" style="width: 18rem;">
                        <img src="/assest/img/{{ $item->foto_produk }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama_produk }}</h5>
                            <p class="card-text">{{ $item->name_jurusan }}</p>
                            <p class="card-text">{{ $item->deskription }}</p>
                            <form action="{{ route('delete', $item->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger w-50">delete</button>
                            </form>
                            {{-- <form action="{{route('edit', $item->id)}}" method="post">
                                @csrf
                                @method('patch')
                                <button type="submit" class="btn btn-success mt-2 w-50">Edit</button>
                            </form> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
