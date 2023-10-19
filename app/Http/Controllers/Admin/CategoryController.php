<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryCreate;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(4);
        return view('admin.categories.index' , compact('categories'));
    }

    public function create()
    {
        $categories = Category::latest();
        return view('admin.categories.create' , compact('categories'));
    }

    public function store(CategoryCreate $request)
    {
        // Validate
        $validData = $request->validated();
        //file handle
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = '/uploads/categories/' . time() . '.' . $image->extension();
            $image->move(public_path($imagePath) , $image->getClientOriginalName());
            $validData['image'] = $imagePath;
        }
        //insert database
        Category::create($validData);
        //return categories index
        Alert::toast('دسته بندی جدید با موفقیت افزوده شد.' , 'success');

        return redirect()->route('dashboard.categories');
    }
}
