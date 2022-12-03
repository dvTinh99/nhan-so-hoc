<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required',
            ]);

            $data = $request->all();
            $check = $this->create($data);

            if ($check) {
               if($this->login($request)){
                   return redirect()->route('index');
               };
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    function login(Request $request)
    {
        if($this->checkLogin($request)) {
            return redirect()->route('index');
        } else {
            return redirect()->route('login')->with('error', 'Sai tên đăng nhập hoặc mật khâủ');
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
            return false;
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

    public function changePassword(Request $request)
    {
        try {
            $request->validate([
                'current_password' =>'required',
                'new_password' =>'required',
                'new_password_confirmation' =>'required|same:new_password'
            ]);
            $user = User::find(Auth::user()->id);
            $credentials = ['email' => $user->email, 'password' => $request->current_password];
            if (Auth::attempt($credentials)) {
                $user->update([
                    'password' => Hash::make($request->new_password)
                ]);
                return redirect()->route('index');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function forgotPassword(Request $requests)
    {
        $user = User::where('email', $requests->email)->first();
        if($user) {
            $newPass = rand(0, 999999);
            $user->update([
                'password' => Hash::make($newPass)
            ]);
            $details = [
                'title' => 'Mail from dvtinh99',
                'body' => $newPass
            ];

            try {
                Mail::to($requests->email)->send(new ForgotPasswordMail($details));
                return redirect()->back()->with('success', 'Vui lòng kiểm tra email !');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', $e->getMessage());
            }
        }
        return redirect()->back()->with('error', 'Tài khoản không tồn tại');
    }
}
