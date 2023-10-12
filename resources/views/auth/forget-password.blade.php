@extends('auth.master')
@section('auth')
    <div class="form-bg">
        <div class="container">
            <div class="row d-flex justify-content-center" style="margin-top: 10%">
                <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                    <div class="form-container">
                        <h3 class="title">فراموشی رمز عبور</h3>
                        <ul class="social-links">
                            <li><a href=""><i class="fab fa-google"></i></a></li>
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        </ul>
                        <span class="description">ایمیل خود را وارد کنید</span>
                        <form class="form-horizontal" action="{{route('forget-password')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">
                                    ثبت
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
