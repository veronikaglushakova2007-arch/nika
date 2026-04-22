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
}
