@extends('admin-dashboard.layout')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Profile</h3>
                        @csrf
                        @if (is_null(Auth::user()->image_profile))
                            <img src="{{ asset('/assest/img/profile.png') }}" alt="" srcset=""
                                style="border-radius: 50%" class="d-block m-auto" width="150px">
                        @else
                            <img src="{{ asset('assets/img/' . Auth::user()->image_profile) }}" alt=""
                                srcset="" style="border-radius: 50%" class="d-block m-auto  img-fluid">
                        @endif
                        <div class="d-flex">
                            <a href="/uploadProfile" class="bi bi-person-square ms-4 p-2"></a>
                        </div>
                        <ul style="list-style: none">
                            <li>Nama : {{ Auth::user()->name }}</li>
                            <li>Username : {{ Auth::user()->username }}</li>
                            <li>Email : {{ Auth::user()->email }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
