<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function task1()
    {
        return DB::table('users')->get();
    }

    public function task2()
    {
        $users = DB::table('users')->get();
        foreach ($users as $user) {
            echo $user->name . ' - ' . $user->email . "\n";
        }
    }

    public function task3()
    {
        $users = DB::table('users')->get();
        return view('users', ['users' => $users]);
    }

    public function task4()
    {
        return DB::table('posts')->where('id', '!=', 3)->toSql();
    }

    public function task5()
    {
        DB::enableQueryLog();
        DB::table('posts')->where('id', '!=', 3)->get();
        return DB::getQueryLog();
    }

    public function task6()
    {
        return DB::table('users')->select('name', 'email')->get();
    }

    public function task7()
    {
        return DB::table('users')->select('name', 'email as user_email')->get();
    }

    public function task8()  
    {
        return DB::table('users')->where('age', 30)->get(); 
    }


    public function task9()  
    { 
        return DB::table('users')->where('age', '!=', 30)->get(); 
    }


    public function task10() 
    { 
        return DB::table('users')->where('age', '>', 30)->get(); 
    }


    public function task11() 
    { 
        return DB::table('users')->where('age', '<', 30)->get(); 
    }


    public function task12() 
    { 
        return DB::table('users')->where('age', '<=', 30)->get(); 
    }


    public function task13() 
    { 
        return DB::table('users')->whereBetween('age', [20, 30])->get(); 
    }

    public function task14()
    {
        return DB::table('users')->where('age', 30)->orWhere('id', '>', 4)->get();
    }

    public function task15()
    {
        return DB::table('users')->where('age', 30)->orWhere('salary', 500)->orWhere('id', '>', 4)->get();
    }

    public function task16()
    {
        return DB::table('users')->where('salary', 500)->orWhereBetween('age', [20, 30])->get();
    }

    public function task17()
    {
        return DB::table('users')->whereBetween('age', [20, 30])->orWhereBetween('salary', [400, 800])->get();
    }

    public function task18()
    {
        return DB::table('users')->where('id', 3)->first();
    }

    public function task19()
    {
        $user = DB::table('users')->where('id', 3)->first();
        return view('user', ['user' => $user]);
    }

    public function task20()
    {
        return DB::table('users')->where('id', 3)->value('email');
    }

    public function task21()
    {
        $email = DB::table('users')->where('id', 3)->value('email');
        return view('email', ['email' => $email]);
    }

    public function task22()
    {
        return DB::table('users')->pluck('name');
    }

    public function task23()
    {
        $names = DB::table('users')->pluck('name');
        return view('names', ['names' => $names]);
    }

    public function task24()
    {
        return DB::table('users')->whereBetween('age', [30, 40])->get();
    }

    public function task25()
    {
        return DB::table('users')->whereNotBetween('age', [30, 40])->get();
    }

    public function task26()
    {
        return DB::table('users')->whereIn('id', [1, 2, 3, 5])->get();
    }

    public function task27()
    {
        return DB::table('users')->whereNotIn('id', [1, 2, 3, 5])->get();
    }

    public function task28()
    {
        return DB::table('users')->whereId(3)->get();
    }

    public function task29()
    {
        return DB::table('users')->whereName('john')->get();
    }

    public function task30()
    {
        return DB::table('users')->whereEmail('john@mail.com')->get();
    }

    public function task31()
    {
        return DB::table('users')->whereIdAndAge(3, 20)->get();
    }

    public function task32()
    {
        return DB::table('users')->whereIdOrAge(3, 20)->get();
    }

    public function task33()
    {
        return DB::table('users')->orderBy('age', 'asc')->get();
    }

    public function task34()
    {
        return DB::table('users')->orderBy('salary', 'desc')->get();
    }

    public function task35()
    {
        return DB::table('users')->orderBy('created_at', 'asc')->get();
    }

    public function task36()
    {
        return DB::table('users')->orderBy('created_at', 'desc')->get();
    }

    public function task37()
    {
        return DB::table('users')->where('age', '>', 30)->orderBy('created_at', 'asc')->get();
    }

    public function task38()
    {
        return DB::table('users')->orderBy('updated_at', 'desc')->get();
    }

    public function task39()
    {
        return DB::table('users')->where('age', '>', 30)->orderBy('updated_at', 'asc')->get();
    }

    public function task40()
    {
        return DB::table('users')->inRandomOrder()->get();
    }

    public function task41()
    {
        return DB::table('users')->inRandomOrder()->first();
    }

    public function task42()
    {
        $all = DB::table('users')->whereBetween('age', [20, 30])->inRandomOrder()->get();
        $one = DB::table('users')->whereBetween('age', [20, 30])->inRandomOrder()->first();
        return ['all' => $all, 'one' => $one];
    }

    public function task43()
    {
        return DB::table('users')->take(3)->get();
    }

    public function task44()
    {
        return DB::table('users')->where('age', 30)->take(3)->get();
    }

    public function task45()
    {
        return DB::table('users')->skip(4)->take(10)->get();
    }

    public function task46()
    {
        return DB::table('users')->where('age', 30)->skip(2)->take(10)->get();
    }

    public function task47()
    {
        return DB::table('users')->insert([
            'name' => 'Новый пользователь',
            'email' => 'new@mail.ru',
            'age' => 25,
            'salary' => 50000,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    public function task48()
    {
        $id = DB::table('users')->insertGetId([
            'name' => 'Пользователь с id',
            'email' => 'iduser@mail.ru',
            'age' => 30,
            'salary' => 60000,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        echo "ID вставленного пользователя: " . $id;
    }

    public function task49()
    {
        return DB::table('users')->insert([
            ['name' => 'User 1', 'email' => 'user1@mail.ru', 'age' => 20, 'salary' => 40000, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'User 2', 'email' => 'user2@mail.ru', 'age' => 25, 'salary' => 45000, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'User 3', 'email' => 'user3@mail.ru', 'age' => 30, 'salary' => 50000, 'created_at' => now(), 'updated_at' => now()]
        ]);
    }

    public function task50()
    {
        return DB::table('users')->where('id', 5)->update([
            'name' => 'Изменённый пользователь',
            'salary' => 75000
        ]);
    }

    public function task51()
    {
        return DB::table('users')->where('age', 30)->update(['salary' => 500]);
    }

    public function task52()
    {
        return DB::table('users')->where('id', 1)->increment('age');
    }

    public function task53()
    {
        return DB::table('users')->where('age', 30)->increment('salary', 100);
    }

    public function task54()
    {
        return DB::table('users')->where('id', 5)->delete();
    }

    public function task55()
    {
        return DB::table('users')->delete();
    }
}
