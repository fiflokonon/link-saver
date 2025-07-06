<!DOCTYPE html>
<html lang="en">

@include('partials.dashboard.head')

<body>
<!-- Begin page -->
<div class="wrapper">

    <!-- ========== Topbar Start ========== -->
    @include('partials.dashboard.navbar')
    <!-- ========== Topbar End ========== -->

    <!-- ========== Left Sidebar Start ========== -->
    @include('partials.dashboard.sidebar')
    <!-- ========== Left Sidebar End ========== -->

    <!-- ============================================================== -->
    <!-- Start Page Content Here -->
    <!-- ============================================================== -->

    <div class="content-page">
        @include('partials.back_message')
        @yield('content')

        @include('partials.dashboard.footer')

    </div>



    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

@include('partials.dashboard.scripts')

</body>

</html>

