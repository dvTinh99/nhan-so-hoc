<?php

namespace App\Http\Controllers;

use App\Models\Seek;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeekController extends Controller
{
    function create(Request $request)
    {
        $birthday = Carbon::create($request->get('Nam'), $request->get('Thang'), $request->get('Ngay'))->format('Y-m-d');

        $user = User::find(Auth::id());
        $seek = Seek::create([
            'user_id' => $user->id,
            'name' => $request->get('HoTen'),
            'birthday' => $birthday,
            'status' => config('status.PENDING'),
        ]);

        $user->turn_remaining -= 1;
        $user->turn_used += 1;
        $user->save();
        return redirect()->route('index');
    }
}
