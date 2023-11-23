<?php /** @noinspection PhpVoidFunctionResultUsedInspection */

namespace Modules\Blog\Repositories;

use App\Models\Category;
use Modules\Blog\Entities\Blog;
use RealRashid\SweetAlert\Facades\Alert;

class ArticleRepository implements ArticleRepositoryInterface
{

    public function getList(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $articles = Blog::latest()->get();
        return view('blog::admin.post.index', compact('articles'));
    }

    public function createForm(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $categories = Category::latest()->get();
        return view('blog::admin.post.create', compact('categories'));
    }


    public function insertData($request)
    {
        $user = auth()->user();
        $article = Blog::insertQuery($user, $request);
        $article->categories()->attach($request->categories);
        $tags = explode(",", $request->tags);
        $article->tag($tags);
        Alert::toast('مقاله شما با موفقیت افزوده شد.', 'success');

        return redirect('/dashboard/articles');
    }

    public function edit($article_id)
    {
        $article = Blog::find($article_id);
        $categories = Category::latest()->get();
        $tags = implode(',' , $article->tags->pluck('name')->toArray());

        return view('blog::admin.post.edit', compact(['article' , 'categories' , 'tags']));
    }

    public function updateData($request, $article_id)
    {
        $article = Blog::find($article_id);
        $article->update([
           'title' => $request->title,
           'slug' => $request->slug,
           'description' => $request->description,
           'image' => $request->image,
           'type_file' => $request->type_file,
           'path_file' => $request->path_file,
           'status' => $request->status,
        ]);
        $article->categories()->sync($request->categories);
        $article->tag($request->tags);
        Alert::toast('مقاله شما با موفقیت بروزرسانی شد.', 'success');

        return redirect('dashboard/articles');

    }

    public function destroy($article)
    {
        Blog::find($article)->delete();
        Alert::toast('مقاله شما با موفقیت حذف شد.', 'success');
        return back();
    }


}