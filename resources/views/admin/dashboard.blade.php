<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>آدومکس - قالب مدیریتی ریسپانسیو بوت استرپ 4</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/adminpanel/assets/images/favicon.ico">

    <!-- CSS
 ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/adminpanel/assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="/adminpanel/assets/css/vendor/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="/adminpanel/assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="/adminpanel/assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="/adminpanel/assets/css/vendor/cryptocurrency-icons.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/adminpanel/assets/css/plugins/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="/adminpanel/assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/adminpanel/assets/css/style.css">

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="/adminpanel/assets/css/style-primary.css">

</head>

<body dir="rtl">
    @include('sweetalert::alert')

    {{-- Header --}}
    @include('admin.partials.header')
    {{-- endHeader --}}

    {{-- sidebar --}}
    @include('admin.partials.sidebar')
    {{-- endSidebar --}}

    {{-- main --}}
    <div class="content-body">
        @yield('content')
    </div>
    {{-- endMain --}}


    <!-- JS
                                    ============================================ -->

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="/adminpanel/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="/adminpanel/assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="/adminpanel/assets/js/vendor/popper.min.js"></script>
    <script src="/adminpanel/assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="/adminpanel/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/adminpanel/assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="/adminpanel/assets/js/main.js"></script>

</body>


<!-- Mirrored from demo.hasthemes.com/adomx-preview-v1/dark-rtl/table-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 May 2019 22:39:24 GMT -->

</html>
