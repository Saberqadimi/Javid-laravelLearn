<div class="side-header show">
    <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
    <!-- Side Header Inner Start -->
    <div class="side-header-inner custom-scroll">

        <nav class="side-header-menu" id="side-header-menu">
            <ul>
                <li><a href="/dashboard"><i class="ti-home"></i> <span>داشبورد</span></a>

                </li>
                @can('show-users-list')
                <li><a href="/dashboard/users"><i class="ti-palette"></i> <span>کاربران </span></a></li>
                @endcan
                <li><a href="/dashboard/categories"><i class="ti-palette"></i> <span>دسته بندی ها</span></a></li>
                <li><a href="/dashboard/articles"><i class="ti-palette"></i> <span>مطالب ها</span></a></li>
                <li><a href="/dashboard/comments"><i class="ti-palette"></i> <span>دیدگاه ها</span></a></li>
                <li><a href="/dashboard/roles"><i class="ti-palette"></i> <span>مقام ها</span></a></li>
                <li><a href="/dashboard/permissions"><i class="ti-palette"></i> <span>دسترسی ها</span></a></li>
{{--                <li><a href="/admin/settings"><i class="ti-palette"></i> <span>تنظیمات </span></a></li>--}}

            </ul>
        </nav>

    </div><!-- Side Header Inner End -->
</div>
