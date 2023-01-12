@extends('main')

@section('main')
    <div class="container">
        <div class="row mt-5" style="margin-left: 35%">
            <div class="col">
                <img src="assest/img/error.png" alt="" width="400px">
            </div>
        </div>
        <div class="row" style="margin-left: 35%">
            <div class="col">
                <h5>Anda tidak dapat mengakses halaman ini</h5>
                <a style="width: 100px" href="/dashboard" class="btn btn-primary" type="submit">Kembali</a>
            </div>
        </div>
    </div>
@endsection
