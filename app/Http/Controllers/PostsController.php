<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class PostsController extends Controller
{
    public function show(Post $post, Request $request)
    {
        if ( !empty($post->slug) && $post->slug != $request->slug) {
            return redirect(route('posts.show', array_merge([$post->id, $post->slug])), 301);
        }
        $categories = Category::where('parent_id', null)->with('subCat')->orderBy('order')->get();

        $post = Post::with(['category.parentCat', 'authorId'])->where('id', $post->id)->first();
        $nextPostId = Post::find($post->getNextPostId($post->id));
        $prevPostId = Post::find($post->getPrevPostId($post->id));

        return view('posts.show', compact('post', 'categories', 'nextPostId', 'prevPostId'));
    }

    public function search(Request $request)
    {
        $this->validate($request, [
            'q' => 'max:30',
        ], [
            'q.max' => '输入的搜索内容过长'
        ]);

        $paginator = [];
        $query = $request->get('query');
        if (isset($query)) {
            $paginator = Post::search($query)->paginate(1);
        }

        return view('posts.search', compact('paginator', 'query'));
    }
}
