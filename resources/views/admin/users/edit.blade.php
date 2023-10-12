@extends('admin.dashboard')
@section('content')

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>ویرایش کاربر</h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row mbn-30 mx-auto mr-auto">
        <div class="col-lg-8 col-md-8 col-12 mb-30">
            <div class="box">
                <div class="box-body">
                    <form action="/admin/users/update/" method="POST">
                        <div class="row mbn-20">


                            <div class="col-12 mb-20">
                                <input type="text" name="full_name" value="" id="formLayoutUsername3"
                                       class="form-control" placeholder=" نام و نام خانوادگی">
                            </div>

                            <div class="col-12 mb-20">
                                <input type="text" name="email" value="" id="formLayoutUsername3"
                                       class="form-control" placeholder=" ایمیل">
                            </div>

                            <div class="col-12 mb-20">
                                <input type="password" name="password" id="formLayoutUsername3"
                                       class="form-control" placeholder=" پسوورد">
                            </div>

                            <div class="col-12 mb-15">
                                <select name="role" class="form-control">
                                    <option>انتخاب</option>
                                    <option value="کاربر">کاربر</option>
                                    <option value="کارمند">کاربر</option>
                                    <option value="ادمین">کاربر</option>
                                </select>
                            </div>


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
