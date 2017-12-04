<?php

namespace App\Models;

use App\Libraries\EsSearchable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use TCG\Voyager\Models\Post as TcgPost;

class Post extends TcgPost
{
    use Searchable, EsSearchable;

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function getPrevPostId($id)
    {
        return Post::where('id', '<', $id)->max('id');
    }

    public function getNextPostId($id)
    {
        return Post::where('id', '>', $id)->min('id');
    }

    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'body' => $this->body,
        ];
    }

    public function searchableAs()
    {
        return "post";
    }
}
