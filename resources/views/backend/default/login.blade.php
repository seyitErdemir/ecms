<!DOCTYPE html>
<html lang="tr">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="/backend/login/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/backend/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="/backend/login/vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="/backend/login/vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="/backend/login/vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="/backend/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="/backend/login/css/main.css">

    <meta name="robots" content="noindex, follow">
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt="">
                    <a href="{{route('nedmin.Login')}}"><img src="/images/settings/img-01.png" alt="IMG"></a>
                </div>

                <form action="{{route('nedmin.Authenticate')}}" method="post" class="login100-form validate-form">
                    @csrf

                    @if(Session::has('error'))
                    <div class="alert alert-danger">
                        {{session('error')}}
                    </div>
                    @elseif(Session::has('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                    @endif
                    <span class="login100-form-title">
                        Yönetici Girişi
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" required type="text" name="email" placeholder="Kullanıcı Adı"
                            value="{{old('email')}}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" required type="password" name="password" placeholder="Parolanız..">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>


                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                    <div class="text-center p-t-136">


                        <i class="  m-l-5" aria-hidden="true"></i>

                    </div>


                </form>
            </div>
        </div>
    </div>

    <script src="/backend/login/vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="/backend/login/vendor/bootstrap/js/popper.js"></script>
    <script src="/backend/login/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="/backend/login/vendor/select2/select2.min.js"></script>

    <script src="/backend/login/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
    </script>

    <script async="" src="../../../gtag/js.js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>

    <script src="js/main.js"></script>
    <script defer="" src="../../../beacon.min.js"
        data-cf-beacon='{"rayId":"66f1b64eaff9fd01","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.6.0","si":10}'>
    </script>
</body>

</html>