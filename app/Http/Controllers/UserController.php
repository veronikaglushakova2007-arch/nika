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
}
