<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style_login.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="row">
        <div class="col-7 d-flex" id="left-col">
            <a href="" class="align-self-end nav-link text-white py-5 px-4" id="logo">read.<span class="text-warning">in</span></a>
        </div>
        <div class="col-5" id="right-col">
            <div class="title-text px-4">
                <h2>Sign in.</h2>
                <p>let's find your next read</p>
            </div>
            <form action="" class="py-5 px-4" method="POST">
                <input type="text" class="form-control mb-3" placeholder="Email or username">
                <input type="password" class="form-control mb-4" placeholder="Password">
                <p class="form-text" id="forgot-text">Forgot your password?</p>
                <button type="submit" class="btn form-control mt-3" id="btn-login" name="login">Continue to your profile</button>
                <div class="text-bottom text-center mt-4">
                    <p class="form-text mb-1" id="account-text">Doesn't have an account</p>
                    <a href="/register" class="form-text" id="register-text">Register here</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>