<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{env('APP_NAME')}} | Admin @yield('page')</title>

    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
</head>
<body class="text-center">
    <section class="form-container">
        <main class="form-signin">
            <form method="POST" action="{{ route('admin.login.check') }}">@csrf
                <img class="mb-4" src="{{asset('images/logo.png')}}" alt="" height="57">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}" autofocus>
                    <label for="floatingInput">Email address</label>
                </div>

                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                @error('email') <p class="small text-danger mt-2">{{ $message }}</p> @enderror
                @error('password') <p class="small text-danger mt-2">{{ $message }}</p> @enderror
    
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

                <p class="mt-5 mb-3 text-muted">&copy; {{date('Y')}}</p>
            </form>
        </main>
    </section>
</body>
</html>
