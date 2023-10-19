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
                    <form action="{{ route('dashboard.store.category') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mbn-20">

                            <div class="col-12 mb-20">
                                <input type="text" name="name" id="formLayoutUsername3" class="form-control"
                                       placeholder=" عنوان ">
                            </div>
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="col-12 mb-20">
                                <input type="text" name="slug" id="formLayoutUsername3" class="form-control"
                                       placeholder=" اسلاگ ">
                            </div>
                            @error('slug')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="col-12 mb-20">
                                <input type="file" name="image" id="formLayoutUsername3" class="form-control">
                            </div>
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="col-12 mb-20">
                                <select name="parent" id="">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('parent')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
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

