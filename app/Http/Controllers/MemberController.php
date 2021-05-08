<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function dashboard()
    {
        return view('member.dashboard');
    }

    public function profile()
    {
        return view('member.profile');
    }
}
