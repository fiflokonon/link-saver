<!doctype html>
<html lang="en" dir="ltr">

@include('partials.dashboard.head')

<body class="app sidebar-mini ltr light-mode">

<!--{ Pre-loder start }-->
@include('partials.dashboard.loader')
<!--{ Pre-loder end }-->
@include('partials.dashboard.switcher')
<!-- PAGE -->
<div class="page">
    <div class="page-main">
        @include('partials.back_message')
        <!--{ app header start }-->
        @include('partials.dashboard.header')
        <!--{ app header end }-->
        <!--{ app sidebar start }-->
        @include('partials.dashboard.sidebar')
        <!--{ app sidebar end }-->
        @yield('content')
    </div>
</div>

<!-- FOOTER -->
@include('partials.dashboard.footer')
<!-- FOOTER END -->

@include('partials.dashboard.scripts')

</body>

</html>
