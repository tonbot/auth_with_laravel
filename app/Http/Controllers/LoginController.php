<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\CustomHelper\General;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("login.index");
    }
    /**
     * Show the form for creating a new resource.
     */
    public function auth(UserRequest $request)
    {
            $validatedData = $request->validated();

            $email = $validatedData['email'];
            $password =$validatedData['password'];

            // Authenticate the user
            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                $user = Auth::user();
                // Set session values
                session::migrate(true);
                session([
                    'email' => $user->email,
                    'fname' => $user->fname,
                    'lname' => $user->lname,
                ]);
         
                return response()->json(General::setResponse(200,'Login Successful', ''));
            } else {
                return response()->json(General::setResponse(204,'User not exist', ''));
            }
    }


}