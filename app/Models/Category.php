<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Category as TcgCategory;

class Category extends TcgCategory
{
    public function subCat()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function parentCat()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }
}
