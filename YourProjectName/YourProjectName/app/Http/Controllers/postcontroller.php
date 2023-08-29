<?php

namespace App\Http\Controllers;
use App\Models\users;
use Illuminate\Http\Request;
// use DB;
use App\Http\Controllers\Controller;
class PostController extends Controller
{
    function getdata(Request $req){
$username =$req->input("name");
$password =$req->input("password");
$users = users::all(); 
foreach ($users as $user) {
   if ($user["email"] == $username) {
    if ($user["password"] == $password) {
        $name=$user["name"];
        // echo"<h1>علاوي حبيب قلبي</h1>";
    //    return view("/home");
       return view('home',  compact('name') );
       

    // return redirect()->route('home'); 
    //    redirect("home");
    }else{
        echo"<h1>the;oajshdfiusahdi</h1>";
        return view("login");

    }

   }else{
    echo"<h1>اسمك غلط</h1>";
        return view("login");
   }
}

    }
}