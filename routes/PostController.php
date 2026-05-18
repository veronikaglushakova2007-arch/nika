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

    public function changeFirst()
    {
        $post = Post::find(1);
        
        if ($post) {
            $post->title = 'НОВЫЙ заголовок для статьи 1';
            $post->text = 'НОВЫЙ текст статьи 1';
            $post->save();
        }
        
        return redirect('/post/all')->with('success', 'Статья #1 изменена!');
    }

    public function editPost(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        
        if ($request->isMethod('post')) {
            $post->title = $request->title;
            $post->slug = $request->slug;
            $post->likes = $request->likes;
            $post->text = $request->text;
            $post->save();
            
           return redirect('/post/all')->with('success', "Статья #{$post->id} «{$post->title}» успешно обновлена!");
        }
        
        return view('posts.edit', ['post' => $post]);
    }

    public function delPost($id)
    {
        $post = Post::findOrFail($id);
        $title = $post->title;
        $post->delete();
        
        return redirect('/post/all')->with('success', "Статья «{$title}» удалена!");
    }

    public function getDeletedPosts()
    {
        $posts = Post::onlyTrashed()->get();
        return view('posts.deleted', ['posts' => $posts]);
    }

    public function restorePost($id)
    {
        $post = Post::onlyTrashed()->findOrFail($id);
        $title = $post->title;
        $post->restore();
        
        return redirect('/post/deleted')->with('success', "Статья $title восстановлена");
    }
}