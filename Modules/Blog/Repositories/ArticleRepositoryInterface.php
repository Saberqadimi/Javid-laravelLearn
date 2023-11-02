<?php

namespace Modules\Blog\Repositories;

use Modules\Blog\Entities\Blog;

interface ArticleRepositoryInterface
{

    public function getList();
    public function createForm();

    public function insertData($data);

    public function edit($article_id);
    public function updateData($data, $article);

    public function destroy($article);
}
