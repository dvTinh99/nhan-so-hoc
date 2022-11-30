<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
            ]);

            $data = $request->all();
            $check = $this->create($data);

            if ($check) {
               if($this->login($request)){
                   return redirect()->route('index');
               };
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

    }

    function login(Request $request)
    {
        if($this->checkLogin($request)) {
            return redirect()->route('index');
        } else {
            dd('Login details are not valid');
        }
    }

    public function checkLogin(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return true;
            }
            return false;
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return redirect()->route('index');
    }
}
