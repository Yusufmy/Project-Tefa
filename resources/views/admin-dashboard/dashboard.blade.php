@extends('admin-dashboard.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @if (session('notAllowed'))
                    <div class="alert alert-danger">
                        {{ session('notAllowed') }}
                    </div>
                @endif
                <h2>Hi, {{Auth::user()->name}}</h2>
            </div>
        </div>
    </div>
@endsection
