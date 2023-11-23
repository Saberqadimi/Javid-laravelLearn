
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>لیست بلاگ</title>

    <!--web fonts-->


    <!--basic styles-->
    @include('site.assets.style')
    @yield('style')
</head>

<body class="bg-gray">

<!--header start-->
@include('site.partials.header')
@include('sweetalert::alert')

<!--header end-->
@if (in_array(Route::currentRouteName(), ['main']))
<!--page title start-->
@include('site.partials.section-top')
@endif

<!--page title end-->

<!--blog start-->
<section class="section-gap pb-0">
    @yield('content')
</section>
<!--blog end-->


<!--footer start-->
@include('site.partials.footer')

<!--footer end-->

<!--basic scripts-->
@include('site.assets.blog')


</body>

</html>
