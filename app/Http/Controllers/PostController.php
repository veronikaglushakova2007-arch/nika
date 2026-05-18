<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function newPost(Request $request)
{
    if ($request->isMethod('post')) {
        $post = new Post();
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->likes = $request->likes ?? 0;
        $post->text = $request->text;
        $post->save();
        
        return redirect('/post/all');
    }
    
    return view('posts.new');
}
}
