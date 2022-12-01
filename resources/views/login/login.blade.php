@extends('main')

@section('container')
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="image" style="position: absolute;margin-left:720px">
                  <img src="assest/img/login.png" width="500px" height="700px">
                </div>
                <h1 style="position: absolute;margin-left:850px">Hello, Friend!</h1>
            </div>
        </div>
      <div class="row text-center mb-3">
        <div class="col-5" style="margin-top: 150px; margin-left:200px;">
          <h2>Login to Teaching Factory</h2>
        </div>
      </div>
      <div class="row justify-content-center mt-4">
        <div class="col-md-7">
          <div style="margin-left: 100px">please fill in the data below:</div>
          <form method="POST" action="#">
            <div class="mb-3 mt-2 md-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" aria-describedby="email" name="nama" />
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" aria-describedby="password" name="email" />
            </div>
            <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>
          </form>
        </div>
      </div>
    </div>
</section>
@endsection