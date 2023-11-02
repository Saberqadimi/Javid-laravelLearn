@extends('admin.dashboard')
@section('content')
    <div class="row justify-content-between align-items-center mb-10">
        <!-- Page Headings Start -->

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>لیست مطالب</h3>
            </div>
        </div><!-- Page Heading End -->

        <!-- Page Button Group Start -->
        <div class="col-12 col-lg-auto mb-20">
            <a href="/dashboard/articles/create">
                <button class="button button-icon-right button-primary">
                <span>
                    <i class="zmdi zmdi-plus"></i>
                    ایجاد مطالب جدید
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
                            <th>توضیحات کوتاه</th>
                            <th>نویسنده</th>
                            <th>تاریخ ایجاد</th>
                            <th>تعدادبازدید</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <td>{{ $article->id }}</td>
                                <td>{{ $article->title }}</td>
                                <td>{{ \Str::limit($article->description , 80) }}</td>
                                <td>{{ $article->author }}</td>
                                <td>{{ $article->created_at }}</td>
                                <td>{{ $article->view_count }}</td>
                                <td>
                                    <a href="{{route('dashboard.article.edit' , $article->id)}}">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{route('dashboard.article.delete' , $article->id)}}">
                                        <i class="fa fa-close" aria-hidden="true"></i>
                                    </a>
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
