<?php
namespace App\Http\Controllers;

class UserController extends Controller{
    public function show(){
        return 'hello world';
    }

    public function all(){
        return 'all';
    }

    public function city($city){
        $users = [
		'user1' => 'city1',
		'user2' => 'city2',
		'user3' => 'city3',
		'user4' => 'city4',
		'user5' => 'city5',
	];
    return $users[$city];
    }
}
?>