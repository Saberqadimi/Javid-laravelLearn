@extends('admin.dashboard')
@section('content')

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>دیدگاه ها</h3>
            </div>
        </div><!-- Page Heading End -->


    </div><!-- Page Headings End -->

    <div class="row mbn-30">
        <div class="col-lg-12 col-md-12 col-12 mb-30">
            <div class="box">
                <div class="box-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>نویسنده</th>
                            <th>دیدگاه</th>
                            <th>درپاسخ به</th>
                            <th>وضعیت</th>
                            <th>تاریخ</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="comment-row ">
                            <th>23</th>
                            <td>
                                <div class="commenter">
                                    <div class="avatar mr-10 mb-10">
                                        <img src="/assets/images/avatar/avatar-1.jpg" alt="">
                                        <div class="status"></div>
                                    </div>
                                    <div class="name mr-10 mt-10">Javid</div>
                                </div>
                            </td>
                            <td>
                                <div class="comment">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus culpa deserunt

                                    <div class="comment-operations mt-10" id="comment-hover">
                                        <a href="/admin/comments/approve/" class="btn btn-sm btn-success"
                                           href="">
                                            <span>تایید</span>
                                        </a>
                                        <a href="/admin/comments/reject/" class="btn btn-sm btn-warning"
                                           href="">
                                            <span>رد</span>
                                        </a>
                                        <a href="/admin/comments/delete/" class="btn btn-sm btn-danger"
                                           href="">
                                            <span>حذف</span>
                                        </a>
                                    </div>
                                </div>


                            </td>
                            <td>مقاله بیست و هشتم</td>
                           <td>تایید شده</td>
                            <td>1402-05-23</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
