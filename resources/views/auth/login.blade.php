@extends('auth.master')
@section('auth')
    <div class="form-bg">
        <div class="container">
            <div class="row d-flex justify-content-center" style="margin-top: 10%">
                <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                    <div class="form-container">
                        <h3 class="title">ورود به حساب</h3>
                        <ul class="social-links">
                            <li><a href=""><i class="fab fa-google"></i></a></li>
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        </ul>
                        <span class="description">ایمیل و پسوورد خود را وارد کنید</span>
                        @if(isset($messageError))
                            <div class="alert alert-danger mt-2">
                                {{ $messageError }}
                            </div>
                        @endif
                        <form class="form-horizontal" action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                                @error('email')
                                <div class="alert alert-danger mt-2 p-0">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                @error('password')
                                <div class="alert alert-danger mt-2 p-0">{{$message}}</div>
                                @enderror
                            </div>
                            <div>
                                <label>مرا به خاطر داشته باش!</label>
                                <input type="checkbox" name="remember">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">
                                    ثبت
                                </button>
                            </div>
                        </form>
                        <ul style="display: flex;list-style: none;text-align: center">
                            <li style="padding: 8px;margin-right: 2pc;">
                                <a class="btn-link" href="{{ route('show-register-form') }}">ثبت
                                    نام</a>
                            </li>
                            <li style="padding: 8px;margin-right: 2pc;">
                                <a class="btn-link" href="{{ route('show-login-form') }}">ورود</a>
                            </li>
                            <li style="padding: 8px;margin-right: 2pc;">
                                <a href="/">صفحه اصلی</a>

                            </li>
                        </ul>

                        <a class="btn-link" href="/forget-password">
                            فراموشی رمز عبور
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @include('sweetalert::alert')
    </div>

@endsection
