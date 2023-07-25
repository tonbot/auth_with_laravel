<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\CustomHelper\General;

class RegisterController extends Controller
{
    /**
     * display login page
     */
    public function index()
    {
        return view("register.index");
    }

    /**
     * Register new user
     */
    public function create_user(Request $request)
    {
        $validatedData = $request->validate(
            [
                "first_name" => "required|string|max:50",
                "last_name" => "required|string|max:50",
                "email" => "required|email|unique:users",
                "password"  => "required|string"
            ]
        );

        //hash password
        $hashedPassword = Hash::make($validatedData["password"]);

        //store the user
        $users = new User();

             $users->fname =$validatedData["first_name"];
             $users->lname =$validatedData["last_name"];
             $users->email =$validatedData["email"];
             $users->password = $hashedPassword; 
             $isSaved = $users -> save();

            if($isSaved) {
                return response()->json(General::setResponse(200,'user created successfuly', ''));
            }

                return response()->json(General::setResponse(204,'Your account cannot be created', ''));
       
        
    }
}