<?php

namespace Modules\Blog\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Blog\Entities\Blog;
use Modules\Blog\Http\Requests\CreateArticleRequest;
use Modules\Blog\Repositories\ArticleRepositoryInterface;
use RealRashid\SweetAlert\Facades\Alert;

class ArticleController extends Controller
{
    private $repository;

    /**
     * @param ArticleRepositoryInterface $repository
     */
    public function __construct(ArticleRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->getList();
    }

    public function create()
    {
      return $this->repository->createForm();
    }

    public function store(CreateArticleRequest $request)
    {
        return $this->repository->insertData($request);
    }

    public function edit($article_id)
    {
        return $this->repository->edit($article_id);
    }

    public function update(CreateArticleRequest $request , $article_id)
    {
        return $this->repository->updateData($request , $article_id);
    }

    public function destroy($id)
    {
       return $this->repository->destroy($id);
    }
}
