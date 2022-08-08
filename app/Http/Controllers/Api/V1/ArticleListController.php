<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\Article\ArticleCollection;
use App\Models\Article;

class ArticleListController extends Controller
{
    public function __invoke()
    {
        return response()->json(new ArticleCollection(Article::all()), 200);
    }
}
