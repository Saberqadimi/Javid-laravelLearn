<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Modules\Blog\Entities\Blog;

class AdminController extends Controller
{

    public function index()
    {
        $usersCount = User::count();
        $articleCount = Blog::whereStatus(1)->count();
        $categoryCount = Category::count();
        $countView = Blog::sum('view_count');

        return view('admin.dashboard.index' , compact(['usersCount' , 'articleCount' , 'categoryCount' , 'countView']));
    }
}
