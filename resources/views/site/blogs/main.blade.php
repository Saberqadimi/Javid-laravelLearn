@extends('site.index')
@section('content')
<div class="container">
    <div class="row justify-content-between">
        <div class="col-lg-8">
            @foreach($articles as $article)
            <div class="card border-0 mb-4 box-hover">
                <div class="card-body row align-items-center">
                    <div class="col-md-4 mb-md-0 mb-3">
                        <a href="{{route('single.article' , $article->slug)}}"><img class="card-img" src="{{$article->image}}" alt=""></a>
                    </div>
                    <div class="col-md-8">
                        <a href="{{route('single.article' , $article->slug)}}" class="font-size-14">{{$article->title}}</a>
                        <h6 class="my-2"><a href="#"></a></h6>
                        <span class="font-size-14 text-muted">{{$article->created_at}}</span>

                        <div class="mt-3">
                            <p>{!! \Str::limit($article->description , 200) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <!--pagination-->
            <div class="pagination justify-content-center mt-lg-5 mb-4">
                <a href="#" class="btn btn-dark disabled"><i class="fa fa-angle-left"></i></a>
                <div class="h6 mt-2 mx-4">
                    1 از 17
                </div>
                <a href="#" class="btn btn-dark"><i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="blog-widget mb-4">
                <form>
                    <div class="form-group">
                        <div class="icon-field">
                            <i class="vl-search"></i>
                            <input type="text" class="form-control" placeholder="جستجو">
                        </div>
                    </div>
                </form>
            </div>
            <div class="blog-widget mb-4">
                <h6 class="mb-4">دسته بندی ها</h6>
                <div class="list-group list-group-right-arrow">
                    <a href="#" class="list-group-item">هنر (20)</a>
                    <a href="#" class="list-group-item">غذا (32)</a>
                    <a href="#" class="list-group-item">شیوه زندگی (17)</a>
                    <a href="#" class="list-group-item">سفر (02)</a>
                </div>
            </div>
            <div class="blog-widget mb-4">
                <div class="card border-0 mb-md-0 mb-3">
                    <img class="card-img-top" src="/site/assets/img/blog/blog-author.jpg" alt="card image" />
                    <div class="card-body py-4">
                        <h6 class="mb-2">عباسی</h6>
                        <div>
                            <p class="font-lora">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                            <div class="p-0 social-links mb-0 mt-4">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-widget mb-4">
                <h6 class="mb-4">پست های اخیر</h6>
                <div class="card border-0 mb-1">
                    <div class="card-body row align-items-center">
                        <div class="col-4">
                            <a href="#"><img class="card-img" src="/site/assets/img/blog/bt-1.jpg" alt=""></a>
                        </div>
                        <div class="col-8">
                            <h6 class="my-2 font-size-14"><a href="#">زندگی پرحجم در لس آنجلس</a></h6>
                            <span class="font-size-14 text-muted">فروردین 1398</span>
                        </div>
                    </div>
                </div>
                <div class="card border-0 mb-1">
                    <div class="card-body row align-items-center">
                        <div class="col-4">
                            <a href="#"><img class="card-img" src="/site/assets/img/blog/bt-2.jpg" alt=""></a>
                        </div>
                        <div class="col-8">
                            <h6 class="my-2 font-size-14"><a href="#">قیمت عالی برای قالب کلاب</a></h6>
                            <span class="font-size-14 text-muted">فروردین 1398</span>
                        </div>
                    </div>
                </div>
                <div class="card border-0 mb-1">
                    <div class="card-body row align-items-center">
                        <div class="col-4">
                            <a href="#"><img class="card-img" src="/site/assets/img/blog/bt-3.jpg" alt=""></a>
                        </div>
                        <div class="col-8">
                            <h6 class="my-2 font-size-14"><a href="#">نمونه طراحی های ما را دنبال کنید</a></h6>
                            <span class="font-size-14 text-muted">فروردین 1398</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
