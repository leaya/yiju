<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Post as TcgPost;

class Post extends TcgPost
{
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
}
