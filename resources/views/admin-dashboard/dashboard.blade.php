@extends('admin-dashboard.layout')

@section('content')
    @if (session('notAllowed'))
        <div class="alert alert-danger">
            {{ session('notAllowed') }}
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="card" style="width: 18rem;">
                    <img src="assest/img/produk.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="card" style="width: 18rem;">
                    <img src="assest/img/produk.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="card" style="width: 18rem;">
                    <img src="assest/img/produk.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
