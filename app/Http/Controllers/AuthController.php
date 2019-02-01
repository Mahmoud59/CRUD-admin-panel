<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use JWTAuth;
use JWTAuthException;
use App\User;
use App\Client;
use App\Service;
use DB;
use Hash;
use Crypt;
use Illuminate\Support\Facades\Auth;
use JWTFactory;
use Response;
use Validator;
class AuthController extends Controller
{
    public function index()
    {
    	return view('admin/register');
    }

    public function registeration(Request $request)
    {
    	$existingAdmin=User::where('email',$request->email)->get();

        if(count($existingAdmin) > 0)
        {
          return response()->json([
              'status_code' => 406,
              'message' => 'This Admin has registered before'
          ]);
        }

        $newAdmin=new User;
        $newAdmin->name=$request->name;
        $newAdmin->email=$request->email;
        $newAdmin->password = Hash::make($request->password);
        $newAdmin->save();
        return redirect()->action('AuthController@login');
    }

    public function login()
    {
    	return view('admin/login');
    }

    public function authenticate(Request $request)
    {   
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            $request->session()->put('name', Auth::user()->name);
            return redirect('/client');
        }
        else
            return redirect('/login');

  }

  public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}


