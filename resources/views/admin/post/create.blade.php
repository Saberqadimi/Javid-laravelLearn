@extends('admin.dashboard')
@section('content')
<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

    <!-- Page Heading Start -->
    <div class="col-12 col-lg-auto mb-20">
        <div class="page-heading">
            <h3>ایجاد مطلب جدید</h3>
        </div>
    </div><!-- Page Heading End -->

</div><!-- Page Headings End -->

<div class="row mbn-30 mx-auto mr-auto">
    <div class="col-lg-8 col-md-8 col-12 mb-30">
        <div class="box">
            <div class="box-body">
                <form action="{{ route('dashboard.article.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mbn-20">

                        <div class="col-12 mb-20">
                            <input type="text" name="title" id="formLayoutUsername3" class="form-control"
                                placeholder=" عنوان مطلب">
                        </div>
                        <div class="col-12 mb-20">
                            <input type="text" name="slug" id="formLayoutUsername3" class="form-control"
                                placeholder=" slug">
                        </div>
                        <div class="col-12 mb-20">

                            <textarea name="description" id="content" class="form-control"
                                placeholder="محتوای جدید"></textarea>
                        </div>


                        <div class="col-12 mb-20">
                            <label for="image">عکس شاخص</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>

                        <div class="col-12 mb-20">
                           <select name="type_file">
                            <option value="blog">مقاله</option>
                            <option value="video">ویدیو</option>
                            <option value="podcast">پادکست</option>
                           </select>
                        </div>


                        <div class="col-12 mb-20">
                            <div class="form-group">
                                <label class="inline"><input name="status" value="0" type="radio">پیش نویس</label>

                                <label class="inline"><input name="status" value="1" type="radio">منتشر شده</label>
                            </div>
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

