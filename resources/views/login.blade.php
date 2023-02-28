<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- ========== Online Stylesheet ========== --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    {{-- ========== Offline Stylesheet ========== --}}
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Login | Admin LTE</title>
</head>

<body class="hold-transition login-page">

    {{-- ========== Content ========== --}}
    {{-- ===== Login Box : Start ===== --}}
    <div class="login-box">

        {{-- ===== Login Logo : Start ===== --}}
        <div class="login-logo">
            <a href="#">
                <b>Polymorphism</b>
            </a>
        </div>
        {{-- ===== Login Logo : End --}}

        {{-- =====  Card : Start --}}
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in</p>

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>
                </form>

                <div class="d-flex justify-content-center">
                    <small class="my-3 text-center">
                        Don't Have An Account?
                        <a href="/register" class="text-center">Register</a>
                    </small>
                </div>

            </div>
            {{-- ===== Card : End --}}

        </div>
    </div>
    {{-- ===== Login Box : End ===== --}}

    {{-- ========== Offline JavaScript ========== --}}
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
