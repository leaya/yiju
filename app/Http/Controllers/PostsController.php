<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class PostsController extends Controller
{
    public function show(Post $post)
    {
        $categories = Category::where('parent_id', null)->with('subCat')->orderBy('order')->get();

        $post = Post::with(['category.parentCat', 'authorId'])->where('id', $post->id)->first();
        $nextPostId = Post::find($post->getNextPostId($post->id));
        $prevPostId = Post::find($post->getPrevPostId($post->id));

        return view('posts.show', compact('post', 'categories', 'nextPostId', 'prevPostId'));
    }

    public function search(Request $request)
    {
        $this->validate($request, [
            'q' => 'required|max:30',
        ], [
            'q.required' => '输入的搜索内容不能为空',
            'q.max' => '输入的搜索内容过长'
        ]);

        $q = $request->get('q');
        if (empty($q)) {
            return '';
//            return redirect(route('posts.search'))->withMessage('输入的搜索内容不能为空');
        }
//        $paginator = [];
        $paginator = Post::search($q)->paginate(5);

        return view('posts.search', compact('paginator', 'q'));
    }
}
