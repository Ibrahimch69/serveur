<?php
 
namespace App\Http\Controllers;
 
use Redirect,Response,File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
 


class UserController extends Controller
{
    function register(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();
        
        return $user;
   
    }
    function login(Request $req)
    {
        $email =  $req->input('email');
        $password = $req->input('password');
 
        $user = DB::table('users')->where('email',$email)->first();
        if(!Hash::check($password, $user->password))
        {
            echo "Not Matched";
        }
        else
        {
            //$user = DB::table('users')->where('email',$email)->first();
           echo $user->email;
        }
    }
}