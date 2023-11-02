@extends('admin.dashboard')
@section('content')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.css"
          integrity="sha512-3uVpgbpX33N/XhyD3eWlOgFVAraGn3AfpxywfOTEQeBDByJ/J7HkLvl4mJE1fvArGh4ye1EiPfSBnJo2fgfZmg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: #ffffff;
            background: #2196f3;
            padding: 3px 7px;
            border-radius: 3px;
        }

        .bootstrap-tagsinput {
            width: 100%;
        }
    </style>    <!-- Page Headings Start -->
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

                            <div class="col-12 mb-20" style="background-color: white;padding: 2px;">
                                <label for="categoriesSelect">دسته بندی</label>
                                <select style="display: block;width:100%" name="categories[]" id="categoriesSelect"
                                        class="selectpicker" multiple data-live-search="true">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 mb-20">
                                <label for="categoriesSelect">برچسب ها </label>
                                <input type="text" name="tags" data-role="tagsinput"  class="form-control">
                            </div>
                            @error('title')
                            {{$message}}
                            @enderror
                            <div class="col-12 mb-20">
                                <input type="text" name="title" id="formLayoutUsername3" class="form-control"
                                       placeholder=" عنوان مطلب">
                            </div>
                            @error('title')
                            {{$message}}
                            @enderror
                            <div class="col-12 mb-20">
                                <input type="text" name="slug" id="formLayoutUsername3" class="form-control"
                                       placeholder=" نامک">
                            </div>
                            @error('slug')
                            {{$message}}
                            @enderror
                            <div class="col-12 mb-20">

                            <textarea name="description" id="description" class="form-control"
                                      placeholder="محتوای جدید"></textarea>
                            </div>

                            @error('description')
                            {{$message}}
                            @enderror
                            <div class="col-12 mb-20">
                                <label for="image">عکس شاخص</label>
                                <input type="text" name="image" id="image_label" aria-describedby="button-image"
                                       class="form-control">

                                <button class="btn btn-outline-primary" type="button" id="button-image">انتخاب</button>
                            </div>
                            @error('image')
                            {{$message}}
                            @enderror
                            <div class="col-12 mb-20" id="divWrapper">
                                <select name="type_file" id="fileTypeSelect" onchange="checkSelectValue()">
                                    <option value="blog">مقاله</option>
                                    <option value="video">ویدیو</option>
                                    <option value="podcast">پادکست</option>
                                </select>
                            </div>
                            @error('type_file')
                            {{$message}}
                            @enderror
                            <div class="col-12 mb-20" style="display: none" id="pathFileInput">
                                <label for="path_file">مدیا</label>
                                <input type="text" name="path_file" id="path_file" aria-describedby="button-path-file"
                                       class="form-control">

                                <button class="btn btn-outline-primary" type="button" id="button-path-file">انتخاب
                                </button>
                            </div>
                            @error('path_file')
                            {{$message}}
                            @enderror

                            <div class="col-12 mb-20">
                                <div class="form-group">
                                    <label class="inline"><input name="status" value="0" type="radio">پیش نویس</label>

                                    <label class="inline"><input name="status" value="1" type="radio">منتشر شده</label>
                                </div>
                            </div>
                            @error('status')
                            {{$message}}
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

        <script>
            CKEDITOR.replace('description', {
                filebrowserImageBrowseUrl: '/file-manager/ckeditor'
            });

            // moono-lisa
            document.addEventListener("DOMContentLoaded", function () {

                document.getElementById('button-image').addEventListener('click', (event) => {
                    event.preventDefault();
                    selectType('image');
                });

                document.getElementById('button-path-file').addEventListener('click', (event) => {
                    event.preventDefault();
                    selectType('media');
                });
            });

            function selectType(value) {
                window.open('/file-manager/fm-button', 'fm', 'width=1200,height=600');
                window.selectedTag = value;
            }

            // set file link
            function fmSetLink($url) {
                if (window.selectedTag === 'image') {
                    document.getElementById('image_label').value = $url;
                } else if (window.selectedTag === "media") {
                    document.getElementById('path_file').value = $url;
                }
            }

            function checkSelectValue() {
                var select = document.getElementById('fileTypeSelect');
                var selectedValue = select.options[select.selectedIndex].value;

                var pathFileInput = document.getElementById('pathFileInput');

                if (selectedValue !== "blog") {
                    pathFileInput.style.display = "block";
                } else {
                    pathFileInput.style.display = "none";
                }
            }

        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.min.js"
                integrity="sha512-SXJkO2QQrKk2amHckjns/RYjUIBCI34edl9yh0dzgw3scKu0q4Bo/dUr+sGHMUha0j9Q1Y7fJXJMaBi4xtyfDw=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css"/>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    @endpush
@endsection

