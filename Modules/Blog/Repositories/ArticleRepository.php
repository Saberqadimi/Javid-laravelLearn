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
        return view('blog::admin.post.create' , compact('categories'));
    }


    public function insertData($request)
    {
        $user = auth()->user();
        $article = Blog::insertQuery($user,$request);
        $article->categories()->sync($request->categories);
        $tags = explode("," , $request->tags);
        $article->tag($tags);
        Alert::toast('مقاله شما با موفقیت افزوده شد.', 'success');

        return redirect('/dashboard/articles');
    }

    public function updateData($request,Blog $article)
    {
        // TODO: Implement updateData() method.
    }

    public function destroy($article)
    {
        // TODO: Implement destroy() method.
    }


}
