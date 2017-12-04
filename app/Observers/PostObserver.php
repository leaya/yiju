<?php


namespace App\Observers;


use TCG\Voyager\Models\Post;

class PostObserver {
    public function saving(Post $post)
    {
        $post->body = clean($post->body, 'user_topic_body');
        $post->excerpt = make_excerpt($post->body);
    }
}