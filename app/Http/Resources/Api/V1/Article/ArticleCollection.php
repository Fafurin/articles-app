<?php

namespace App\Http\Resources\Api\V1\Article;

use App\Http\Resources\Api\V1\Category\CategoryResource;
use App\Http\Resources\Api\V1\User\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'category' => new CategoryResource($this->category),
            'author' => new UserResource($this->author),
            'published at' => $this->published_at,
        ];
    }
}
