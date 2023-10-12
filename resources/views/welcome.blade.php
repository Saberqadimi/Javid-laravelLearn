<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">

    @auth()
        <div class="alert alert-primary">
        <h3>شما در سیستم وارد شده اید.</h3>
            @if(isset($message))
                <div class="alert alert-outline-primary">
                    {{$message}}
                </div>
            @endif
        </div>
        <br>
        @if(auth()->user()->email_verified_at == null)
            <a href="/verify-email">
             <h3>   ایمیل خود را وریفای و تایید کنید.</h3>
            </a>
        @endif
    @endauth


    <br>

    @guest()
        <div class="alert alert-warning">
           <h2> شما در سیستم لاگین نشده اید لطفا وارد شوید</h2>
            <a href="/auth/login"> Login</a>
        </div>
    @endguest
</div>

<div class="container">
    <div class="row">
        @include('sweetalert::alert')
</div>

</body>
</html>
