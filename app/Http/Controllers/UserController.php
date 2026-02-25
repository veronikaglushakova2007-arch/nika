<?php
namespace App\Http\Controllers;

class UserController extends Controller{

    public $users;
    public function __construct()
    {
         $this->users = [
            'user1' => 'city1',
            'user2' => 'city2',
            'user3' => 'city3',
            'user4' => 'city4',
            'user5' => 'city5',
        ];
    }
   

    public function show(){
        return 'hello world';
    }

    public function all(){
        return 'all';
    }

    public function city($name){
        if(isset($this->users[$name])){
        return $this->users[$name];
    } else {
        return "Такого пользователя нет";
    }
    }
}
?>