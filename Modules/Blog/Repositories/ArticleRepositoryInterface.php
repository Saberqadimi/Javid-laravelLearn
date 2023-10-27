<?php

namespace Modules\Blog\Repositories;

use Modules\Blog\Entities\Blog;

interface ArticleRepositoryInterface
{

    public function getList();
    public function createForm();

    public function insertData($data);

    public function updateData($data,Blog $article);

    public function destroy($article);
}
