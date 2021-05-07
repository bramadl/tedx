<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function confirmEmail(Request $request)
    {
        return $request->query('email');
    }
}
