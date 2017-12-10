<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(Category $category)
    {
        $categories = Category::where('parent_id', null)->with('subCat')->Orderby('order')->get();
        $posts = Post::with('authorId')->where('category_id', $category->id)->paginate(5);
        return view('categories.index', compact('categories', 'posts'))->with('currentCat', $category);
    }
}
