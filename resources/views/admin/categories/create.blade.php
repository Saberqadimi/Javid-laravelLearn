@extends('admin.dashboard')
@section('content')
    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>ایجاد دسته بندی جدید</h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row mbn-30 mx-auto mr-auto">
        <div class="col-lg-8 col-md-8 col-12 mb-30">
            <div class="box">
                <div class="box-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="row mbn-20">

                            <div class="col-12 mb-20">
                                <input type="text" name="title" id="formLayoutUsername3" class="form-control"
                                       placeholder=" عنوان ">
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

