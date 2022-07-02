<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="logo">
            <img src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-bird-symbols-png-logo-0.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            Christmas Admin
        </div>
        @if (Session::get('success'))<div class="alert alert-success">{{ Session::get('success') }}</div>@endif
        @if (Session::get('failure'))<div class="alert alert-danger">{{ Session::get('failure') }}</div>@endif
        
        <form class="p-3 mt-3" method="POST" action="{{ route('admin.login.check') }}">
        @csrf
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="email" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}">
            </div>
            @error('email') <p class="small text-danger">{{ $message }}</p> @enderror
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            @error('password') <p class="small text-danger">{{ $message }}</p> @enderror
            <button class="btn mt-3" type="submit">Login</button>
            <div class="col-6 text-end">
                <a href="{{ route('password.request') }}">Forgot Password?</a>
            </div>
        </form>
        <div class="row mt-3">
              <div class="col-12 text-center">
                <a href="{{ url('/') }}">Back to homepage</a>
              </div>
            </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
