<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use PDO;

use function PHPUnit\Framework\isEmpty;

class LoginController extends Controller
{
    public function index()
    {

        return view('auth.index');
    }
    public function login(Request $requ)
    {
        # code...
        $user = User::where('username', $requ['username'])
            ->where('password', $requ['password'])
            ->get();

        if ($user->isEmpty()) {
            return 0; //failed to login

        } else {
            session()->put('isLoggedIn', 1);
            session()->put('role', $user[0]['role']);
            session()->put('name', $user[0]['name']);

            if ($user[0]['role'] == 0) {
                return redirect('/admin');
            } else {
                return redirect('/home');
            }
        }
        // echo $user;
    }
}
