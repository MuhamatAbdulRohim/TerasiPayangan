<?php

namespace App\Http\Controllers;

use App\Models\m_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request as flashdata;

class loginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest', ['only' => ['index']]);
    }

    public function viewLogin()
    {
        return view('guest.beranda');
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password,
        ])) {
            $user = Auth::user();
            if ($user->keuserlevel->jenis_level == 'admin') {
                return redirect('adm_dash');
            } elseif ($user->keuserlevel->jenis_level == 'member') {
                return redirect('/member');
            }
        } else {
              return redirect('/');
        }
    }
}
