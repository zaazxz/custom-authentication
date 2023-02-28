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

    <title>Register | Admin LTE</title>
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
                <p class="login-box-msg">Register</p>

                <form action="#" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user-alt"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted my-1">Level</small>
                    <div class="input-group mb-3 d-flex justify-content-center border">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="icheck-secondary">
                                    <input type="radio" name="r2" id="admin" value="admin">
                                    <label for="admin">
                                        Admin
                                    </label>
                                </div>
                                <div class="icheck-secondary">
                                    <input type="radio" name="r2" id="petugas" value="petugas">
                                    <label for="petugas">
                                        Petugas
                                    </label>
                                </div>
                                <div class="icheck-secondary">
                                    <input type="radio" name="r2" id="masyarakat" value="masyarakat">
                                    <label for="masyarakat">
                                        Masyarakat
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password">
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
                        Already Have An Account?
                        <a href="/" class="text-center">Sign In</a>
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
