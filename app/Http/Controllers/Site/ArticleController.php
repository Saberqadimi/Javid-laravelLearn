<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Modules\Blog\Entities\Blog;
use RealRashid\SweetAlert\Facades\Alert;

class ArticleController extends Controller
{
    public function main()
    {
        $articles = Blog::status(1)->latest()->get();
        $categories = Category::latest()->take(4)->get();
        $latestArticles = Blog::status(1)->take(3)->get();

        return view('site.blogs.main', compact('articles', 'categories', 'latestArticles'));
    }

    public function article($slug)
    {
        $article = Blog::with(['user:id,bio', 'tagged:taggable_id,tag_name', 'comments' =>
                fn($query) => $query->where('approved', 1)]
        )->whereSlug($slug)->first();
        $this->incrementArticleViewCount($article);
        $cacheKeyLike = 'blog_Like' . $article->id . auth()->id();
        return view('site.blogs.single', compact('article' , 'cacheKeyLike'));
    }
    private function incrementArticleViewCount($article)
    {
        $cacheKey = 'article_' . $article->id . auth()->id();
        if (!cache()->has($cacheKey)) {
            $article->increment('view_count');
            cache()->put($cacheKey , true , now()->addDays(5));
        }
    }

    public function likeArticle($slug)
    {
        $article = Blog::where('slug' , $slug)->first();
        $cacheKey = 'blog_Like' . $article->id . auth()->id();
        if (!cache()->has($cacheKey)) {
            $article->increment('like');
            cache()->put($cacheKey , true , now()->addDays(5));
            Alert::toast('لایک شما ثبت شد با تشکر' , 'success');
            return back();
        }
        Alert::toast('شما یکبار این مقاله را لایک کرده اید' , 'error');
        return back();
    }
}
