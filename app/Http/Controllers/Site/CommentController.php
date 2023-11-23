<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Modules\Blog\Entities\Blog;
use RealRashid\SweetAlert\Facades\Alert;

class CommentController extends Controller
{
    public function register(Request $request)
    {
        $article = Blog::findOrFail($request->commentable_id);
        $user = auth()->user();
        $user->comments()->create([
            'commentable_id'=> $article->id,
            'commentable_type'=> get_class($article),
            'comment'=> $request->comment,
            'author'=> $user->name,
            'parent_id'=> $request->parent_id,
        ]);
        Alert::toast("کامنت شما ثبت شد بعد از تایید ادمین نمایش داده میشود." , 'success');
        return back();
    }
}
