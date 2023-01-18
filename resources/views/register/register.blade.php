@extends('main')

@section('main')
    <div class="container-fluid">
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <div class="cardcol-lg-7 mt-5 p-4 rounded mx-auto d-block shadow-lg p-3 mb-5 bg-body rounded">
                        <div class="card-body">
                            <h2>Register</h2>
                            <form action="{{ route('register.input') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="test" class="form-control" id="username" name="username">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
