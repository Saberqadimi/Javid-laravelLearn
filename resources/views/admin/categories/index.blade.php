@extends('admin.dashboard')
@section('content')
<div class="row justify-content-between align-items-center mb-10">
<!-- Page Headings Start -->

    <!-- Page Heading Start -->
    <div class="col-12 col-lg-auto mb-20">
        <div class="page-heading">
            <h3>لیست دسته بندی ها</h3>
        </div>
    </div><!-- Page Heading End -->

    <!-- Page Button Group Start -->
    <div class="col-12 col-lg-auto mb-20">
        <a href="/dashboard/categories/create">
            <button class="button button-icon-right button-primary">
                <span>
                    <i class="zmdi zmdi-plus"></i>
                    ایجاد دسته بندی جدید
                </span>
            </button>
        </a>
    </div><!-- Page Button Group End -->
</div>
<!-- Page Headings End -->

<div class="row mbn-30">
    <div class="col-lg-12 col-md-12 col-12 mb-30">
        <div class="box">
            <div class="box-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>نام</th>
                            <th>تاریخ ایجاد</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>23</td>
                        <td>یثیثیث</td>
                        <td>1402-09-25</td>
                        <td>edit | delete</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
