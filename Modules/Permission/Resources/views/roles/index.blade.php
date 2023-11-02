@extends('admin.dashboard')
@section('content')
    <div class="row justify-content-between align-items-center mb-10">
        <!-- Page Headings Start -->

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>لیست مقام ها</h3>
            </div>
        </div><!-- Page Heading End -->

        <!-- Page Button Group Start -->
        <div class="col-12 col-lg-auto mb-20">
            <a href="/dashboard/roles/create">
                <button class="button button-icon-right button-primary">
                <span>
                    <i class="zmdi zmdi-plus"></i>
                    ایجاد مقام جدید
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
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->label }}</td>
                                <td>{{ $role->created_at }}</td>
                                <td>
                                    <a href="{{route('dashboard.role.edit' , $role->id)}}">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{route('dashboard.role.delete' , $role->id)}}">
                                        <i class="fa fa-close" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$roles->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
