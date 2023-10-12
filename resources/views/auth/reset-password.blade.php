@extends('auth.master')
@section('auth')
    <div class="form-bg">
        <div class="container">
            <div class="row d-flex justify-content-center" style="margin-top: 10%">
                <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                    <div class="form-container">
                        <h3 class="title">رمز عبور جدید خود را وارد کنید.</h3>
                        @if(isset($messageError))
                            <div class="alert alert-danger mt-2">
                                {{ $messageError }}
                            </div>
                        @endif
                        <form class="form-horizontal" action="{{route('reset-password')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="email" value="{{$userEmail}}" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                @error('password')
                                <div class="alert alert-danger mt-2 p-0">{{$message}}</div>
                                @enderror
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
