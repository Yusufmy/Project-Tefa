@extends('main')

@section('main')
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col mt-5">
                    <div class="card col-lg-7 mt-5 p-4 rounded mx-auto d-block shadow-lg p-3 mb-5 bg-body rounded">
                        <div class="card-body">
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            @if (session('notAllowed'))
                                <div class="alert alert-danger">
                                    {{ session('notAllowed') }}
                                </div>
                            @endif
                            <h2 class="text-center">Login</h2>
                            <p class="text-center">Masukan Akun Admin</p>
                            <form action="" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username">
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
    </section>
@endsection
