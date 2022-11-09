<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style_register.css') }}">
    <title>Register</title>
</head>
<body>
    <div class="row">
        <div class="col-7 d-flex" id="left-col">
            <a href="" class="align-self-end nav-link text-white py-5 px-4" id="logo">read.<span class="text-warning">in</span></a>
        </div>
        <div class="col-5" id="right-col">
            <div class="title-text px-4">
                <h2>Sign up.</h2>
                <p>the library’s collections that depend on you.</p>
            </div>
            <form action="{{ route('register') }}" class="py-5 px-4" method="POST">
                @csrf
                <input type="text" class="form-control mb-4 @error('name') is-invalid @enderror" name="name" placeholder="Full name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="text" class="form-control mb-4 @error('email') is-invalid @enderror" placeholder="Email address" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="password" class="form-control mb-4 @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <input type="password" class="form-control mb-4 @error('password') is-invalid @enderror" placeholder="Confirm password" name="password_confirmation" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
                
                <button type="submit" class="btn form-control mt-3" id="btn-login">Register your account</button>
                <div class="text-bottom text-center mt-4">
                    <p class="form-text mb-1" id="account-text">Already have an account</p>
                    <a href="/login" class="form-text" id="login-text">Login here</a>
                </div>
            </form>
        </div>
    </div> 
</body>
</html>

