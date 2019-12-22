
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Floating labels example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">
</head>
<body>
<div class="row justify-content-center" style="top: 50%; left: 50%"></div>
<form class="form-signin" action="{{route('login')}}" method="POST">
    @csrf
    <div class="text-center mb-2">
        <img class="mb-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4VY9OCp_QP5XGYzBLsAZSMRhCcwAOsmLFV3vRbq3U6vJwYawy&s" alt="" width="140" height="100">
        <h1 class="h3 mb-3 font-weight-normal">Floating labels</h1>
        <p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and Firefox.</a></p>
    </div>

    <div class="form-label-group">
        <input type="email" id="email" class="form-control">
        <label for="email">e-mail</label>
    </div>

    <div class="form-label-group">
        <input type="password" id="password" class="form-control" placeholder="Пароль сук" required>Пароль
        <label for="password">password</label>
    </div>

    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me">
            {{ __('Запомнить меня') }}
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
    @if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
    @endif
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2019</p>
</form>
</body>
</body>
</html>
