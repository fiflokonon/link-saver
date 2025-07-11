<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Vote Carrefoot - Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/landing/assets/images/fav.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Theme Config Js -->
    <script src="/dashboard/assets/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="/dashboard/assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="/dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg position-relative">
<div class="position-absolute start-0 end-0 start-0 bottom-0 w-100 h-100">
    <svg xmlns='http://www.w3.org/2000/svg' width='100%' height='100%' viewBox='0 0 800 800'>
        <g fill-opacity='0.22'>
            <circle style="fill: rgba(var(--ct-primary-rgb), 0.1);" cx='400' cy='400' r='600' />
            <circle style="fill: rgba(var(--ct-primary-rgb), 0.2);" cx='400' cy='400' r='500' />
            <circle style="fill: rgba(var(--ct-primary-rgb), 0.3);" cx='400' cy='400' r='300' />
            <circle style="fill: rgba(var(--ct-primary-rgb), 0.4);" cx='400' cy='400' r='200' />
            <circle style="fill: rgba(var(--ct-primary-rgb), 0.5);" cx='400' cy='400' r='100' />
        </g>
    </svg>
</div>
<div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-4 col-lg-5">
                <div class="card">

                    <!-- Logo -->
                    <div class="card-header py-4 text-center" style="background-color: #00823a">
                        <a href="index.html">
                            <span><img src="/dashboard/assets/images/logo-white.png" alt="logo" height="70" width="100"></span>
                        </a>
                    </div>

                    @include('partials.back_message')

                    <div class="card-body p-4">
                        <div class="text-center w-100 m-auto">
                            <h4 class="text-dark-50 text-center mt-0 fw-bold">Se connecter</h4>
{{--                            <p class="text-muted mb-4">Vous n’avez pas de compte ? Créez votre compte, cela prend moins d’une minute.</p>--}}
                        </div>

                        <form action="./login" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Email</label>
                                <input class="form-control" type="email" name="email" id="emailaddress" required="" placeholder="Entrez votre adresse mail">
                            </div>

                            <div class="mb-3">
                                <a href="#" class="text-muted float-end"><small>Mot de passe oublié?</small></a>
                                <label for="password" class="form-label">Mot de passe</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password"  name="password" class="form-control" placeholder="Entrez votre mot de passe">
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                    <label class="form-check-label" for="checkbox-signin">Se souvenir de moi</label>
                                </div>
                            </div>

                            <div class="mb-3 mb-0 text-center">
                                <button class="btn btn-success" type="submit"> Se connecter </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

{{--                <div class="row mt-3">--}}
{{--                    <div class="col-12 text-center">--}}
{{--                        <p class="text-muted">Vous n'avez pas de compte ? <a href="{{ route('register') }}" class="text-muted ms-1"><b>Inscrivez-vous</b></a></p>--}}
{{--                    </div>--}}
{{--                    <!-- end col -->--}}
{{--                </div>--}}
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->

<footer class="footer footer-alt">
    2018 -
    <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
</footer>
<!-- Vendor js -->
<script src="/dashboard/assets/js/vendor.min.js"></script>

<!-- App js -->
<script src="/dashboard/assets/js/app.min.js"></script>

</body>

</html>

