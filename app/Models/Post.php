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
}
