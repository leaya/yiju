<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class PostsController extends Controller
{
    public function show(Post $post)
    {
        $categories = Category::where('parent_id', null)->with('subCat')->get();
//        dd($categories);
//        $categories = Category::with('posts')->get();
        $post = Post::with(['category.parentCat', 'authorId'])->where('id', $post->id)->first();
//        dd($post);
        return view('posts.show', compact('post', 'categories'));
    }
}
