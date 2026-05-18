<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\City;
use App\Models\Country;
use App\Models\Product;
use App\Models\Category;
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

    public function newPost(Request $request)
    {
        if ($request->isMethod('post')) {
            $post = new Post();
            $post->title = $request->title;
            $post->slug = $request->slug;
            $post->likes = $request->likes ?? 0;
            $post->text = $request->text;
            $post->save();
            return redirect('/post/all')->with('success', 'Статья добавлена');
        }
        return view('posts.new');
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
            return redirect('/post/all')->with('success', "Статья #{$post->id} «{$post->title}» обновлена");
        }
        return view('posts.edit', ['post' => $post]);
    }

    public function delPost($id)
    {
        $post = Post::findOrFail($id);
        $title = $post->title;
        $post->delete();
        return redirect('/post/all')->with('success', "Статья «{$title}» удалена");
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
        return redirect('/post/deleted')->with('success', "Статья «{$title}» восстановлена");
    }

    public function changeFirst()
    {
        $post = Post::find(1);
        if ($post) {
            $post->title = 'НОВЫЙ заголовок';
            $post->text = 'НОВЫЙ текст статьи';
            $post->save();
        }
        return redirect('/post/all')->with('success', 'Статья #1 изменена');
    }

    public function massUpdate()
    {
        Post::where('likes', '>', 50)->update(['likes' => 100]);
        Post::where('likes', '<', 10)->update(['likes' => 10]);
        return redirect('/post/all')->with('success', 'Массовое обновление выполнено');
    }

    public function otherMethods()
    {
        Post::firstOrCreate(
            ['slug' => 'unique-post'],
            ['title' => 'Уникальный пост', 'likes' => 5, 'text' => 'Текст']
        );
        Post::updateOrCreate(
            ['slug' => 'example-slug'],
            ['title' => 'Обновлённый заголовок', 'likes' => 10, 'text' => 'Новый текст']
        );
        return redirect('/post/all')->with('success', 'Методы firstOrCreate и updateOrCreate сработали');
    }

    public function getUserWithProfile()
    {
        $user = User::with('profile')->find(1);
        dump($user->name, $user->profile->name ?? 'нет', $user->profile->surname ?? 'нет');
    }

    public function getAllUsersWithProfiles()
    {
        $users = User::with('profile')->get();
        return view('users.profiles', ['users' => $users]);
    }

    public function getUserWithCity()
    {
        $user = User::with('city')->find(1);
        dump($user->name, $user->city->name ?? 'нет');
    }

    public function getAllUsersWithCities()
    {
        $users = User::with('city')->get();
        return view('users.cities', ['users' => $users]);
    }

    public function getAllCitiesWithCountries()
    {
        $cities = City::with('country')->get();
        return view('cities.countries', ['cities' => $cities]);
    }

    public function getAllUsersWithCitiesAndCountries()
    {
        $users = User::with('city.country')->get();
        return view('users.full', ['users' => $users]);
    }

    public function getAllCountriesWithCities()
    {
        $countries = Country::with('cities')->get();
        return view('countries.cities', ['countries' => $countries]);
    }

    public function getAllUsersWithCountriesThrough()
    {
        $users = User::with('country')->get();
        return view('users.countries', ['users' => $users]);
    }

    public function getProductsWithCategories()
    {
        $products = Product::with('categories')->get();
        return view('products.categories', ['products' => $products]);
    }

    public function getCategoriesWithProducts()
    {
        $categories = Category::with('products')->get();
        return view('categories.products', ['categories' => $categories]);
    }

    public function eagerLoadingExample()
    {
        $users = User::with('city')->get();
        foreach ($users as $user) {
            echo $user->name . ' - ' . ($user->city->name ?? 'нет города') . "\n";
        }
        return 'Готово';
    }
}