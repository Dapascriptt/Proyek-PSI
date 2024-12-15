<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delifi Homade | Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('asset_login/images/icons/favicon.ico') }}"/>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset_login/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset_login/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset_login/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset_login/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset_login/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset_login/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset_login/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset_login/css/main.css') }}">
</head>
<body>
<div class="limiter">
    <div class="container-login100" style="background-image: url('{{ asset('asset_login/images/bg.jpg') }}');">
        <div class="wrap-login100 p-t-30 p-b-50">
            <span class="login100-form-title p-b-41">
                Login
            </span>
            <form class="login100-form validate-form p-b-33 p-t-5" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="wrap-input100 validate-input" data-validate="Enter email">
                    <input class="input100" type="email" name="email" placeholder="Email">
                    <span class="focus-input100" data-placeholder="&#xe818;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>

                <div class="container-login100-form-btn m-t-32">
                    <button type="submit" class="login100-form-btn">
                        Login
                    </button>
                </div>
            </form>

            <!-- Tambahkan teks di sini -->
            <div class="text-center p-t-10">
                <span class="txt1">
                    Silahkan <a href="{{ route('register-page') }}" class="txt2">register</a> jika belum punya akun.
                </span>
            </div>
        </div>
    </div>
</div>


    <div id="dropDownSelect1"></div>

    <!-- JS -->
    <script src="{{ asset('asset_login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('asset_login/vendor/animsition/js/animsition.min.js') }}"></script>
    <script src="{{ asset('asset_login/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('asset_login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset_login/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('asset_login/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('asset_login/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('asset_login/vendor/countdowntime/countdowntime.js') }}"></script>
    <script src="{{ asset('asset_login/js/main.js') }}"></script>

</body>
</html>
