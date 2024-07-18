<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index() {
        $users = DB::table('users')->get();
        // var_dump($users);
    
        return view('about', ['users' => $users]);
    }
    

    public function show(){
        return view("show", ["id"=>$id, "name"=>"Nguyen Xuan Hong"]);
    }

    public function create(Request $request){
        return $request->post();
    }
}
