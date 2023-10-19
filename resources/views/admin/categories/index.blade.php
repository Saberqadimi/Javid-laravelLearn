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
                            <th>تصویر</th>
                            <th>تاریخ ایجاد</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <img style="border-radius: 8px;" src="{{$category->image}}" width="75" height="75">
                                </td>
                                <td>{{$category->created_at}}</td>
                                <td>edit | delete</td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>

                {{$categories->links()}}

            </div>
        </div>
    </div>
@endsection
