<header class="app-header transparent-header transparent-header-dark-nav">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!--<div class="branding-wrap">-->
                <!--brand start-->
                <div class="navbar-brand float-left">
                    <a class="" href="index-2.html">
                        <img class="logo-light" src="/site/assets/img/logo.png" srcset="/site/assets/img/logo@2x.png 2x" alt="CLab">
                        <img class="logo-dark" src="/site/assets/img/logo-dark.png" srcset="/site/assets/img/logo-dark@2x.png 2x" alt="CLab">
                    </a>
                </div>
                <!--brand end-->
                <!--start responsive nav toggle button-->
                <div class="nav-btn hamburger hamburger--slider js-hamburger ">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
                <!--end responsive nav toggle button-->
                <!--</div>-->

                <!--top mega menu start-->
                <nav id="vl-menu">
                    <!--start nav-->
                    <ul class="vlmenu light-sub-menu slide-effect float-right">
                        <li><a href="/">بلاگ <i class="fa fa-angle-down"></i></a>
                        </li>
                        <li><a href="#"> دسته بندی ها <i class="fa fa-angle-down"></i></a>
                            <!--start level 2-->
                            <ul>
                                @foreach($categories as $category)

                                <li>
                                    <a href="page-landing.html" class="d-flex">
                                        <i class="vl-pop-corn font-size-20"></i>
                                        <div class="font-weight-700"> {{$category->name}} </div>
                                    </a>
                                </li>
                                @endforeach

                            </ul>
                            <!--end level 2-->
                        </li>
                        <li><a href="#">تماس با ما <i class="fa fa-angle-down"></i></a>
                        </li>
                        <li><a href="#">درباره ما <i class="fa fa-angle-down"></i></a>
                        </li>

                    </ul>
                    <!--end nav-->
                </nav>
                <!--top mega menu end-->
            </div>
        </div>
    </div>
</header>
