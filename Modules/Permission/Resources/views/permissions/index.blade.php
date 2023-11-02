@extends('admin.dashboard')
@section('content')
    <div class="row justify-content-between align-items-center mb-10">
        <!-- Page Headings Start -->

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>لیست دسترسی ها</h3>
            </div>
        </div><!-- Page Heading End -->

        <!-- Page Button Group Start -->
        <div class="col-12 col-lg-auto mb-20">
            <a href="/dashboard/permissions/create">
                <button class="button button-icon-right button-primary">
                <span>
                    <i class="zmdi zmdi-plus"></i>
                    ایجاد دسترسی جدید
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
                            <th>عنوان</th>
                            <th>نام نمایشی</th>
                            <th>تاریخ ایجاد</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($permissions as $permission)
                            <tr>
                                <td>{{ $permission->id }}</td>
                                <td>{{ $permission->name }}</td>
                                <td>{{ $permission->label }}</td>
                                <td>{{ $permission->created_at }}</td>
                                <td>
                                    <a href="{{route('dashboard.permission.edit' , $permission->id)}}">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{route('dashboard.permission.delete' , $permission->id)}}">
                                        <i class="fa fa-close" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$permissions->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
