@extends('admin.dashboard')
@section('content')
<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

    <!-- Page Heading Start -->
    <div class="col-12 col-lg-auto mb-20">
        <div class="page-heading">
            <h3>داشبورد <span>/ تجارت الکترونیکی</span></h3>
        </div>
    </div><!-- Page Heading End -->
</div><!-- Page Headings End -->

<div class="row mbn-30">
    <div class="col-xlg-4 col-md-6 col-12 mb-30">
        <div class="top-report">

            <!-- Head -->
            <div class="head">
                <h4>تعداد کاربران</h4>
                <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
            </div>

            <!-- Content -->
            <div class="content">
                <h2>{{$usersCount}}</h2>
            </div>

            <!-- Footer -->
            <div class="footer">
                <div class="progess">
                    <div class="progess-bar" style="width: 92%;"></div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-xlg-4 col-md-6 col-12 mb-30">
        <div class="top-report">

            <!-- Head -->
            <div class="head">
                <h4>تعداد مقالات</h4>
                <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
            </div>

            <!-- Content -->
            <div class="content">
                <h2>{{$articleCount}}</h2>
            </div>

            <!-- Footer -->
            <div class="footer">
                <div class="progess">
                    <div class="progess-bar" style="width: 92%;"></div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-xlg-4 col-md-6 col-12 mb-30">
        <div class="top-report">

            <!-- Head -->
            <div class="head">
                <h4>تعداد دسته بندی ها</h4>
                <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
            </div>

            <!-- Content -->
            <div class="content">
                <h2>{{$categoryCount}}</h2>
            </div>

            <!-- Footer -->
            <div class="footer">
                <div class="progess">
                    <div class="progess-bar" style="width: 92%;"></div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-xlg-4 col-md-6 col-12 mb-30">
        <div class="top-report">

            <!-- Head -->
            <div class="head">
                <h4>تعداد دیدگاه ها</h4>
                <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
            </div>

            <!-- Content -->
            <div class="content">
                <h2>236</h2>
            </div>

            <!-- Footer -->
            <div class="footer">
                <div class="progess">
                    <div class="progess-bar" style="width: 92%;"></div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-xlg-4 col-md-6 col-12 mb-30">
        <div class="top-report">

            <!-- Head -->
            <div class="head">
                <h4>تعداد بازدید ها</h4>
                <a href="#" class="view"><i class="zmdi zmdi-eye"></i></a>
            </div>

            <!-- Content -->
            <div class="content">
                <h2>{{$countView}}</h2>
            </div>

            <!-- Footer -->
            <div class="footer">
                <div class="progess">
                    <div class="progess-bar" style="width: 92%;"></div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
