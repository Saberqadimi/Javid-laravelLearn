@extends('admin.dashboard')
@section('content')
    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>ایجاد کاربر جدید</h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->
    <div class="row mbn-30 mx-auto mr-auto">
        <div class="col-lg-8 col-md-8 col-12 mb-30">
            <div class="box">
                <div class="box-body">
                    <form action="{{route('dashboard.create.user')}}" method="POST">
                        @csrf
                        <div class="row mbn-20">
                            <div class="col-12 mb-20">
                                <input type="text" name="full_name" id="formLayoutUsername3" class="form-control"
                                       placeholder=" نام و نام خانوادگی">
                            </div>
                            @error('full_name')
                            <div class="alert alert-danger p-1">
                                {{$message}}
                            </div>
                            @enderror

                            <div class="col-12 mb-20">
                                <input type="text" name="email" id="formLayoutUsername3" class="form-control"
                                       placeholder=" ایمیل">
                            </div>
                            @error('email')
                            <div class="alert alert-danger p-1">
                                {{$message}}
                            </div>
                            @enderror
                            <div class="col-12 mb-20">
                                <input type="password" name="password" id="formLayoutUsername3" class="form-control"
                                       placeholder=" پسوورد">
                            </div>
                            @error('password')
                            <div class="alert alert-danger p-1">
                                {{$message}}
                            </div>
                            @enderror
                            <div class="col-12 mb-15">
                                <select name="type" class="form-control">
                                    <option>انتخاب</option>
                                    <option value="user">کاربرمعمولی</option>
                                    <option value="admin">ادمین</option>
                                    <option value="staff">پشتیبان</option>
                                </select>
                            </div>
                            @error('type')
                            <div class="alert alert-danger p-1">
                                {{$message}}
                            </div>
                            @enderror
                            <div class="col-12 mb-20">
                                <input type="submit" value="ذخیره سازی" class="button button-primary">
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
