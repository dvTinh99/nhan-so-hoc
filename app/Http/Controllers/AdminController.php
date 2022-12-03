<?php

namespace App\Http\Controllers;

use App\Models\PaymentHistory;
use App\Models\User;

class AdminController extends Controller
{
    public function listUsers(){
        $users = User::all();
        return view('pages.admin.quan-li-tai-khoan', compact('users'));
    }

    public function deleteUser($id)
    {
        User::destroy($id);
        return redirect()->back();
    }

    public function deletePayment($id)
    {
        PaymentHistory::destroy($id);
        return redirect()->back();
    }

    public function approvePayment($id)
    {
        $paymentHistory = PaymentHistory::find($id);
        $user = $paymentHistory->user;
        $user->turn_remaining += $paymentHistory->turn;
        $user->save();
        $paymentHistory->update(['status' => config('status.APPROVE')]);
        return redirect()->back();
    }
}
