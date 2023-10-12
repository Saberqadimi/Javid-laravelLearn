@extends('auth.master')
@section('auth')
    <div class="form-bg">
        <div class="container">
            <div class="row d-flex justify-content-center" style="margin-top: 10%">
                <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                    <div class="form-container">
                        <h3 class="title">ایجاد حساب جدید</h3>
                        <ul class="social-links">
                            <li><a href=""><i class="fab fa-google"></i></a></li>
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        </ul>
                        <span class="description">نام و ایمیل و پسوورد خود را وارد کنید:</span>
                        <form action="{{route('register')}}" method="POST" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="full_name" class="form-control" placeholder="نام">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="ایمیل">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="رمز عبور">
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
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
