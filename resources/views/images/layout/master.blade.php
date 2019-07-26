<!DOCTYPE html>
<html>
@include('images.layout.headerscript')
<body class="hold-transition sidebar-mini skin-black-light">
<div class="wrapper">
    <!-- header -->
<!-- @include('images.layout.header') -->
<!-- color for side bar -->

    <!-- Nav Bar -->
@include('images.layout.navbar')
<!-- Content -->
    <div class="content-wrapper">
        <section class="content">
           
            @yield('content')

        </section>
    </div>
    <!-- End Content -->
    <!-- Footer -->
@include('images.layout.footer')
<!-- End Footer -->
</div>
</body>
</html>