@extends('admin.dashboard')
@section('content')
    <div class="row justify-content-between align-items-center mb-10">

        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>ایجاد مقام جدید</h3>
            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row mbn-30 mx-auto mr-auto">
        <div class="col-lg-8 col-md-8 col-12 mb-30">
            <div class="box">
                <div class="box-body">
                    <form action="{{ route('dashboard.role.store') }}" method="POST">
                        @csrf
                        <div class="row mbn-20">
                            <div class="col-12 mb-20">
                                <label for="categoriesSelect">عنوان </label>
                                <input type="text" name="name"  class="form-control">
                            </div>
                            <div class="col-12 mb-20">
                                <label for="categoriesSelect">نام نمایشی </label>
                                <input type="text" name="label"   class="form-control">
                            </div>
                            @error('title')
                            {{$message}}
                            @enderror
                            <div class="col-12 mb-20" style="background-color: white;padding: 2px;">
                                <label for="categoriesSelect">دسترسی ها</label>
                                <select style="display: block;width:100%" name="permissions[]" id="categoriesSelect"
                                        class="selectpicker" multiple data-live-search="true">
                                    @foreach($permissions as $permission)
                                        <option value="{{$permission->id}}">{{$permission->name}}</option>
                                    @endforeach
                                </select>
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

    @push('javascript')

        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css"/>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    @endpush
@endsection

