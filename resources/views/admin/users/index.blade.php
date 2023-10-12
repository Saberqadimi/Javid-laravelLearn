@extends('admin.dashboard')
@section('content')
    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>لیست کاربران</h3>
            </div>
        </div><!-- Page Heading End -->

        <!-- Page Button Group Start -->
        <div class="col-12 col-lg-auto mb-20">
            <a href="/dashboard/users/create">
                <button class="button button-icon-right button-primary">
                <span>
                    <i class="zmdi zmdi-plus"></i>
                    ایجاد کاربر جدید
                </span>
                </button>
            </a>
        </div><!-- Page Button Group End -->

    </div><!-- Page Headings End -->

    <div class="row mbn-30">
        <div class="col-lg-12 col-md-12 col-12 mb-30">
            <div class="box">
                <div class="box-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>نام</th>
                            <th>ایمیل</th>
                            <th>تاریخ ایجاد</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>1</th>
                            <td>saber qadimi</td>
                            <td>testt@gmail.com</td>
                            <td>1402-02-30</td>
                            <td>
                                <a href="/admin/users/edit/">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                <a href="/admin/users/delete/">
                                    <i class="fa fa-close" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
