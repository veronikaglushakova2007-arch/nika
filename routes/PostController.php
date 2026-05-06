<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAll(Request $request, $order = 'date', $dir = 'desc')
    {
        $dir = in_array($dir, ['asc', 'desc']) ? $dir : 'desc';
        
        $posts = Post::orderBy($order, $dir)->get();
        
        return view('posts.all', ['posts' => $posts]);
    }
    
    public function getOne($id)
    {
        $post = Post::findOrFail($id);
        
        return view('posts.one', ['post' => $post]);
    }
}