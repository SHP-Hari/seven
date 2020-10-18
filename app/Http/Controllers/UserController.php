<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index(){
        // DB::insert('insert into users (name, email, password) values (?,?,?)',
        // ['Prasanth', 'pr@gmail.com', 'password']);

        // $users = DB::select('select * from users');
        // return $users;

        // DB::update('update users set name = ? where id = 1', ['Great Hari']);

        // DB::delete('delete from users where id = 2');

//        $users = DB::select('select * from users');

//        $users = new User();
//        $users->name = "HP";
//        $users->email = "hp@gmail.com";
//        $users->password = "pswrd";
//        $users->save();

//        $user = new User();
//        $user->name = "greeeet";
//        $user->email = "greeeeee@gmail.com";
//        $user->password = bcrypt("password");
//        $user->save();

//        User::where('id', 3)->update(['name'=>'Hari Prasanth']);

//        User::where('id', 3)->delete();

        $userData = [
            'name' => 'soma krish',
            'email' => 'soma@gmail.com',
            'password' => 'password'
        ];
//        User::create($userData);
        $users = User::all();
        return $users;
//         return view('home');
    }
}
