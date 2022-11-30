<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function listUsers(){
        $users = User::all();
        return view('pages.admin.quan-li-tai-khoan', compact('users'));
    }
}
