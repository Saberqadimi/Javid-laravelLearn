@extends('site.index')

@section('content')
    <section class="section-gap pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <section class="section-gap px-lg-5">
                        <div class="hero-img bg-overlay rounded overflow-hidden" data-overlay="2"
                             style="background-image: url({{$article->image}});"></div>
                        <div class="container">
                            <div class="row align-items-center text-white">
                                <div class="col-md-8">
                                    <h3 class="">
                                        {{$article->title}}
                                    </h3>
                                    <div class="meta font-lora my-4 text-white">
                                        <span class="meta-separator"></span>
                                        <a href="#">{{$article->created_at}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-8">
                <div class="blog-post border-0 blog-single">
                    <a href="{{route('single.article.like' , $article->slug)}}">
                    <span style="font-size: 19px;color:{{$cacheKeyLike == true ? 'red' : 'blue'}}" class="badge badge-outline-light">
                        <i class="fas fa-heart ml-1"></i>{{$article->like}}
                    </span>
                    </a>
                    <div>

                        @if($article->type_file == 'podcast')
                            <audio controls autoplay muted>
                                <source src="{{$article->path_file}}">
                            </audio>
                        @elseif($article->type_file == 'video')

                        @endif
                    </div>
                    <hr>
                    {!! $article->description !!}
                    <h6 class="mb-0">برچسب ها:
                        @foreach($article->tagged as $tag)
                            <a href="#" class="badge badge-pill badge-dark">
                                {{$tag->tag_name}}
                            </a>
                        @endforeach

                    </h6>
                </div>
            </div>
        </div>
    </div>

    <hr>
    {{--    //author--}}
    <div class="component-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-3 text-md-center">
                            <img class="avatar-lg rounded-circle mb-3 d-inline-block"
                                 src="/site/assets/img/team/t-3.jpg" alt="توماس جانسون">
                        </div>
                        <div class="col-md-9">
                            <h5 class="font-lora font-weight-normal mb-4">
                                {{$article->user->bio}}
                            </h5>
                            <div class="border-left mb-3"> &nbsp;</div>
                            <strong class="text-primary">{{$article->author}}</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    {{--    //comments--}}
    <section class="section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!--comments area start-->
                    <div class="comments">
                        <h2 class="comments-title"> نظرات</h2>
                        <ul>
                            <li class="comment ">
                                <article class="comment-body">
                                    <footer class="comment-meta">
                                        <div class="comment-author">
                                            <img alt="" src="/site/assets/img/team/t-1.jpg" class=""
                                                 style="height:85px">
                                            <b class="fn">
                                                <a href="#" rel="external nofollow" class="url">
                                                    کریس امز
                                                </a>
                                            </b>
                                            <span class="says">گفته:</span>
                                        </div>
                                        <!-- .comment-author -->

                                        <div class="comment-metadata">
                                            <a href="#">
                                                <time datetime="2018-09-02T12:17:07+00:00">
                                                    1398 فروردین
                                                </time>
                                            </a>
                                        </div><!-- .comment-metadata -->

                                    </footer><!-- .comment-meta -->

                                    <div class="comment-content">
                                        <p>سلام، این یک دیدگاه میباشد.<br>
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                            و با استفاده از طراحان گرافیک است.<br>
                                            زندگی را زیبا کنید <a href="#">مدرن</a>.</p>
                                    </div><!-- .comment-content -->

                                    <div class="reply">
                                        <a rel="nofollow" class="comment-reply-link" href="#">پاسخ</a>
                                    </div>
                                </article><!-- .comment-body -->
                                <ul class="children">
                                    <li class="comment ">
                                        <article class="comment-body">
                                            <footer class="comment-meta">
                                                <div class="comment-author ">
                                                    <img alt="" style="height:85px" src="/site/assets/img/team/t-2.jpg"
                                                         class="">
                                                    <b class="fn">
                                                        <a href="#" rel="external nofollow" class="url">جانس برونس</a>
                                                    </b>
                                                    <span class="says">گفته:</span>
                                                </div><!-- .comment-author -->

                                                <div class="comment-metadata">
                                                    <a href="#">
                                                        <time datetime="2018-10-16T13:13:25+00:00">
                                                            1398 فروردین
                                                        </time>
                                                    </a>
                                                </div><!-- .comment-metadata -->

                                            </footer><!-- .comment-meta -->

                                            <div class="comment-content">
                                                <p>سلام، این یک دیدگاه میباشد.<br>
                                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                    استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی
                                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.<br>
                                                    زندگی را دوست داشته باشید</p>
                                            </div><!-- .comment-content -->

                                            <div class="reply">
                                                <a rel="nofollow" class="comment-reply-link" href="#">پاسخ</a>
                                            </div>
                                        </article><!-- .comment-body -->
                                    </li><!-- #comment-## -->
                                </ul><!-- .children -->
                            </li><!-- #comment-## -->
                        </ul>
                    </div>
                    <!--comments area end-->

                    <!--comment form start-->
                    <div class="comment-respond">
                        <h3 class="comment-reply-title mb-lg-5 mb-4">
                            کامنت:
                        </h3>
                        @if(auth()->user())

                        <form role="form" action="{{route('register.comment')}}" method="POST" class="comment-form">
                            @csrf
                            <input type="hidden" name="commentable_id" value="{{$article->id}}">
                            <input type="hidden" name="parent_id" value="0">

                            <div class="form-group">
                                <div class="controls">
                                    <textarea id="message" name="comment" rows="5" placeholder="نظر*" class="form-control"
                                              required=""></textarea>
                                </div>
                            </div>

                            <div class="text-center mt-md-5">
                                <button type="submit" class="btn btn-theme">ارسال</button>
                            </div>
                        </form>
                        @else
                            <div class="alert alert-info p-1 text-right">
                                <p>برای ثبت کامنت ابتدا با حساب کاربری خود وارد شوید.</p>
                                <a href="/auth/login">
                                    ورود به حساب کاربری
                                </a>
                            </div>
                        @endif
                    </div>
                    <!--comment form end-->
                </div>
            </div>
        </div>
    </section>
@endsection
