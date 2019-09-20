<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users;
use Auth;

class LoginController extends Controller
{
    public function validateLogin(Request $request)
    {
        $checkUser = Users::where('email', $request->email)->where('password', $request->password)->first();

        if (!empty($checkUser)) {
            if ($checkUser->user_type == 'admin') {
                Auth::loginUsingId($checkUser->id);
                return redirect('/admin/index');
            } else {
                Auth::loginUsingId($checkUser->id);
                return redirect('/user');
            }
        } else {
            return back();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

}
