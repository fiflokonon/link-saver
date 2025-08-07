<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Apexadmin – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Techne Infosys">
    <meta name="keywords" content="admin template, Apexadmin admin template, dashboard template, flat admin template, responsive admin template, web app">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="/dashboard/assets/images/brand/favicon.ico">

    <!-- TITLE -->
    <title>LinkSaver Admin Panel - Login </title>
    <!-- BOOTSTRAP CSS -->
    <link id="style" href="/dashboard/assets/css/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- STYLE CSS -->
    <link href="/dashboard/assets/css/style.css" rel="stylesheet">

    <!-- Plugins CSS -->
    <link href="/dashboard/assets/css/plugins.css" rel="stylesheet">

    <!--- FONT-ICONS CSS -->
    <link href="/dashboard/assets/css/icons.css" rel="stylesheet">

    <!-- INTERNAL Switcher css -->
    <link href="/dashboard/assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="/dashboard/assets/switcher/demo.css" rel="stylesheet">
</head>

<body class="app sidebar-mini ltr light-mode login-img">

<div class="switcher-wrapper">
    <div class="demo_changer">
        <div class="p-4 m-0 lh-1 border-bottom template-customizer-header position-relative py-3 d-flex align-items-center justify-content-between">
            <div>
                <h3 class="template-customizer-t-panel_header mb-2">Template Customizer</h3>
                <p class="template-customizer-t-panel_sub_header mb-0">Customize and preview in real time</p>
            </div>
            <div class="d-flex align-items-center gap-2">
                <a href="javascript:void(0)" onclick="localStorage.clear();
                    document.querySelector('html').style = '';
                    names() ;
                    resetData() ;" class="text-danger"><i class="fe fe-refresh-ccw fs-17 text-danger"></i></a>
            </div>
        </div>
        <div class="form_holder sidebar-right1 ps ps--active-y">
            <div class="row">
                <div class="predefined_styles">
                    <div class="swichermainleft">
                        <h4> <i class="ti ti-layout-navbar"></i> Navigation Style</h4>
                        <div class="skin-body">
                            <div class="switch_section">
                                <div class="switch-toggle d-flex"> <span class="me-auto">Vertical Menu</span>
                                    <label class="switch switch-square">
                                        <input type="radio" name="onoffswitch15" id="myonoffswitch34" class="switch-input" checked>
                                        <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                    </label>
                                </div>
                                <div class="switch-toggle d-flex mt-2"> <span class="me-auto">Horizontal Click
                                            Menu</span>
                                    <label for="myonoffswitch35" class="switch switch-square">
                                        <input type="radio" name="onoffswitch15" id="myonoffswitch35" class="switch-input">
                                        <span class="switch-toggle-slider">
                                            <span class="switch-on"></span>
                                            <span class="switch-off"></span>
                                        </span>
                                    </label>
                                </div>
                                <div class="switch-toggle d-flex mt-2"> <span class="me-auto">Horizontal Hover Menu</span>
                                    <label for="myonoffswitch111" class="switch switch-square">
                                        <input type="radio" name="onoffswitch15" id="myonoffswitch111" class="switch-input">
                                        <span class="switch-toggle-slider">
                                            <span class="switch-on"></span>
                                            <span class="switch-off"></span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4> <i class="ti ti-directions"></i> LTR and RTL VERSIONS</h4>
                        <div class="skin-body">
                            <div class="switch_section">
                                <div class="switch-toggle d-flex"> <span class="me-auto">LTR Version</span>
                                    <label for="myonoffswitch23" class="switch switch-square">
                                        <input type="radio" name="onoffswitch7" id="myonoffswitch23" class="switch-input" checked="">
                                        <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                    </label>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">RTL Version</span>
                                    <label for="myonoffswitch24" class="switch switch-square">
                                        <input type="radio" name="onoffswitch7" id="myonoffswitch24" class="switch-input">
                                        <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4> <i class="ti ti-color-swatch"></i> Light Theme Style</h4>
                        <div class="skin-body">
                            <div class="switch_section">
                                <div class="switch-toggle d-flex"> <span class="me-auto">Light Theme</span>
                                    <label for="myonoffswitch1"  class="switch switch-square">
                                        <input type="radio" name="onoffswitch1" id="myonoffswitch1" class="switch-input" checked="">
                                        <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                    </label>
                                </div>
                                <div class="switch-toggle d-flex"> <span class="me-auto">Light Primary</span>
                                    <div class=""> <input class="w-30p h-30 input-color-picker color-primary-light"
                                                          value="#0d9c1e" id="colorID" oninput="changePrimaryColor()" type="color"
                                                          data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
                                                          data-id7="transparentcolor" name="lightPrimary"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4> <i class="ti ti-moon-stars"></i> Dark Theme Style</h4>
                        <div class="skin-body">
                            <div class="switch_section">
                                <div class="switch-toggle d-flex mt-2"> <span class="me-auto">Dark Theme</span>
                                    <label for="myonoffswitch2" class="switch switch-square">
                                        <input type="radio" name="onoffswitch1" id="myonoffswitch2" class="switch-input">
                                        <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                    </label>
                                </div>
                                <div class="switch-toggle d-flex mt-2"> <span class="me-auto">Dark Primary</span>
                                    <div class=""> <input class="w-30p h-30 input-dark-color-picker color-primary-dark"
                                                          value="#0d9c1e" id="darkPrimaryColorID" oninput="darkPrimaryColor()"
                                                          type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
                                                          data-id3="primary" data-id8="transparentcolor" name="darkPrimary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4>Menu Styles</h4>
                        <div class="skin-body">
                            <div class="switch_section">
                                <div class="switch-toggle lightMenu d-flex"> <span class="me-auto">Light Menu</span>
                                    <label for="myonoffswitch3" class="switch switch-square">
                                        <input type="radio" name="onoffswitch2" id="myonoffswitch3" class="switch-input">
                                        <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                    </label>
                                </div>
                                <div class="switch-toggle colorMenu d-flex mt-2">
                                    <span class="me-auto">Color Menu</span>
                                    <label for="myonoffswitch4" class="switch switch-square">
                                        <input type="radio" name="onoffswitch2" id="myonoffswitch4" class="switch-input">
                                        <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                    </label>
                                </div>
                                <div class="switch-toggle darkMenu d-flex mt-2">
                                    <span class="me-auto">Dark Menu</span>
                                    <label for="myonoffswitch5" class="switch switch-square">
                                        <input type="radio" name="onoffswitch2" id="myonoffswitch5" class="switch-input">
                                        <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft">
                        <h4> <i class="ti ti-brush"></i> Header Styles</h4>
                        <div class="skin-body">
                            <div class="switch_section">
                                <div class="switch-toggle lightHeader d-flex">
                                    <span class="me-auto">Light Header</span>
                                    <label for="myonoffswitch6" class="switch switch-square">
                                        <input type="radio" name="onoffswitch3" id="myonoffswitch6" class="switch-input">
                                        <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                    </label>
                                </div>
                                <div class="switch-toggle  colorHeader d-flex mt-2">
                                    <span class="me-auto">Color Header</span>
                                    <label for="myonoffswitch7" class="switch switch-square">
                                        <input type="radio" name="onoffswitch3" id="myonoffswitch7" class="switch-input">
                                        <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                    </label>
                                </div>
                                <div class="switch-toggle darkHeader d-flex mt-2">
                                    <span class="me-auto">Dark Header</span>
                                    <label for="myonoffswitch8" class="switch switch-square">
                                        <input type="radio" name="onoffswitch3" id="myonoffswitch8" class="switch-input">
                                        <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swichermainleft">
                        <h4> <i class="ti ti-adjustments-horizontal"></i> Layout Positions</h4>
                        <div class="skin-body">
                            <div class="switch_section">
                                <div class="switch-toggle d-flex">
                                    <span class="me-auto">Fixed</span>
                                    <label for="myonoffswitch11" class="switch switch-square">
                                        <input type="radio" name="onoffswitch5" id="myonoffswitch11" class="switch-input" checked="">
                                        <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                    </label>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">Scrollable</span>
                                    <label for="myonoffswitch12" class="switch switch-square">
                                        <input type="radio" name="onoffswitch5" id="myonoffswitch12" class="switch-input">
                                        <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swichermainleft leftmenu-styles">
                        <h4> <i class="ti ti-layout-sidebar"></i> Sidemenu layout Styles</h4>
                        <div class="skin-body">
                            <div class="switch_section">
                                <div class="switch-toggle d-flex">
                                    <span class="me-auto">Default Menu</span>
                                    <label for="myonoffswitch13" class="switch switch-square">
                                        <input type="radio" name="onoffswitch6" id="myonoffswitch13" class="switch-input default-menu" checked="">
                                        <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                    </label>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">Icon with Text</span>
                                    <label for="myonoffswitch14" class="switch switch-square">
                                        <input type="radio" name="onoffswitch6" id="myonoffswitch14" class="switch-input">
                                        <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                    </label>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">Icon Overlay</span>
                                    <label for="myonoffswitch15" class="switch switch-square">
                                        <input type="radio" name="onoffswitch6" id="myonoffswitch15" class="switch-input">
                                        <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                    </label>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">Closed Sidemenu</span>
                                    <label for="myonoffswitch16" class="switch switch-square">
                                        <input type="radio" name="onoffswitch6" id="myonoffswitch16" class="switch-input">
                                        <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                    </label>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">Hover Submenu</span>
                                    <label for="myonoffswitch17" class="switch switch-square">
                                        <input type="radio" name="onoffswitch6" id="myonoffswitch17" class="switch-input">
                                        <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                    </label>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <span class="me-auto">Double Menu Style </span>
                                    <label for="doublemenu-switch" class="switch switch-square">
                                        <input type="radio" name="onoffswitch6"  id="doublemenu-switch" class="switch-input">
                                        <span class="switch-toggle-slider">
                                                <span class="switch-on"></span>
                                                <span class="switch-off"></span>
                                            </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="">
    <!-- PAGE -->
    <div class="page auth-page">
        <div class="">
            <!-- Theme-Layout -->
            <!-- CONTAINER OPEN -->
            <div class="login-container">
                <div class="card login-wrap-main  p-6">
                    <div class="text-center mb-5 auth-logo">
                        <a href="index.html">
                            <img src="/dashboard/assets/images/brand/logo-white.png" class="header-brand-img light-logo" alt="">
                            <img src="/dashboard/assets/images/brand/logo-dark.png" class="header-brand-img dark-logo" alt="">
                        </a>
                    </div>
                    <form class="login-form validate-form" action="{{ route('login') }}" method="POST">
                        @csrf
                        <span class="login-form-title pb-5">
                            Se connecter à LinkSaver
                        </span>
                        <div class="panel panel-primary">
                            <div class="panel-body tabs-menu-body p-0 pt-5">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab5">
                                        <div class="wrap-input validate-input input-group"
                                             data-bs-validate="Valid email is required: ex@abc.xyz">
                                            <a href="javascript:void(0)"
                                               class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 border-start-0 form-control ms-0" name="email" type="email" placeholder="Email">
                                        </div>
                                        <div class="wrap-input validate-input input-group" id="Password-toggle">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-eye-off text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 border-start-0 form-control ms-0" name="password" type="password" placeholder="Mot de passe">
                                        </div>
                                        <div class="text-end pt-4">
                                            <p class="mb-0"><a href="" class="text-primary ms-1">Mot de passe oublié ?</a></p>
                                        </div>
                                        <div class="container-login100-form-btn">
                                            <button type="submit" class="login100-form-btn btn-primary">Se connecter</button>
                                        </div>
{{--                                        <div class="text-center pt-3">--}}
{{--                                            <p class="text-dark mb-0">Don't have account?<a href="" class="text-primary ms-1">Sign UP</a></p>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!-- End PAGE -->

</div>


<!--{ JQUERY JS }-->
<script src="/dashboard/assets/js/jquery.min.js"></script>
<!--{ BOOTSTRAP JS }-->
<script src="/dashboard/assets/js/plugins/bootstrap/js/popper.min.js"></script>
<script src="/dashboard/assets/js/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- Perfect SCROLLBAR JS-->
<script src="/dashboard/assets/js/plugins/p-scroll/perfect-scrollbar.js"></script>
<!--{ Color Theme js }-->
<script src="/dashboard/assets/js/themeColors.js"></script>
<!-- { Show Password js } -->
<script src="/dashboard/assets/js/show-password.min.js"></script>
<!-- { Genrate OTP JS } -->
<script src="/dashboard/assets/js/generate-otp.js"></script>
<!--{ Custom-switcher }-->
<script src="/dashboard/assets/js/custom-swicher.js"></script>
<!--{ Switcher js }-->
<script src="/dashboard/assets/switcher/js/switcher.js"></script>
</body>

</html>
