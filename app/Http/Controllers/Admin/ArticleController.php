<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Blog::latest()->get();
        return view('admin.post.index', compact('articles'));
    }

    public function create()
    {

        return view('admin.post.create');
    }

    public function store(Request $request)
    {
        //validate
        $validData = $request->validate([
            'title' => ['required', 'min:6'],
            'slug' => ['required', 'min:6'],
            'description' => ['required', 'max:200'],
            'image' => ['required', 'min:6'],
            'type_file' => ['required'],
            'status' => ['required'],
        ]);

        //insert or DB
        Blog::create([
            'user_id' => 1,
            'title' => $validData['title'],
            'slug' => $validData['slug'],
            'description' => $validData['description'],
            'image' => $validData['image'],
            'type_file' => $validData['type_file'],
            'status' => $validData['status'],
            'author' => "Saber Qadimi",
        ]);
        //redirect and show alert message
        Alert::toast('مقاله شما با موفقیت افزوده شد.', 'success');

        return redirect('/dashboard/articles');
    }
}
