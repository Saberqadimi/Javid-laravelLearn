@extends('admin.dashboard')
@section('content')
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>بروزرسانی دسترسی : {{$permission->name}}</h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row mbn-30 mx-auto mr-auto">
        <div class="col-lg-8 col-md-8 col-12 mb-30">
            <div class="box">
                <div class="box-body">
                    <form action="{{ route('dashboard.permission.update' , $permission->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mbn-20">
                            <div class="col-12 mb-20">
                                <label for="categoriesSelect">عنوان </label>
                                <input type="text" name="name" value="{{old('name' , $permission->name)}}"
                                       class="form-control">
                            </div>
                            @error('name')
                            <div class="alert alert-danger"> {{$message}}</div>

                            @enderror
                            <div class="col-12 mb-20">
                                <label for="categoriesSelect">نام نمایشی </label>
                                <input type="text" name="label" value="{{old('label' , $permission->label)}}"
                                       class="form-control">
                            </div>
                            @error('label')
                           <div class="alert alert-danger"> {{$message}}</div>
                            @enderror
                            <div class="col-12 mb-20">
                                <input type="submit" value="ذخیره سازی" class="button button-primary">
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('javascript')

        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css"/>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    @endpush
@endsection

