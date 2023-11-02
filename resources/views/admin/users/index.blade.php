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
                        @foreach($users as $user)

                            <tr>
                                <th>{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>
                                    <a href="{{route('dashboard.edit.user' , $user->id)}}">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{route('dashboard.delete.user' , $user->id)}}">
                                        <i class="fa fa-close" aria-hidden="true"></i>
                                    </a>
                                    @if($user->type === "staff")
                                        <a href="{{route('dashboard.template-add-permission' , $user->id)}}">
                                            <i class="fa fa-rebel" aria-hidden="true"></i>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
