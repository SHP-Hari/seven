<?php

namespace App\Http\Controllers;

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

        $users = DB::select('select * from users');
        return $users;

        // return view('home');
    }
}