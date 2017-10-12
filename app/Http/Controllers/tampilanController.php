<?php

namespace App\Http\Controllers;

use App;
use App\Models\m_product;
use App\Models\m_members;
use App\Models\m_orders;
use App\Models\m_order_detail;
use App\Models\m_testimoni;
use App\Models\m_user;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class tampilanController extends Controller
{
    public function index()
    {
        return view('guest.beranda');
    }

    public function viewProductGuest()
    {
        $data = m_product::where('product_id', '<>', 0)->simplePaginate(9);
        return view('guest.product', compact('data'));
    }

    public function viewRegister()
    {
        return view('guest.account');
    }

    public function viewContact()
    {
        return view('guest.contact');
    }

    public function postRegister(Request $request)
    {
        $buatakun = new m_user();
        $buatakun->username = $request->username;
        $buatakun->password = bcrypt($request->password);
        $buatakun->id_level = '2';
        $buatakun->save();

        $daftar = new m_members();
        $daftar->name = $request->name;
        $daftar->address = $request->address;
        $daftar->handphone = $request->handphone;
        $daftar->email = $request->email;
        $daftar->user_id = $buatakun->user_id;
        $daftar->save();

        Session::flash('success_message', 'Terima kasih ' . $request->name . ' telah mendaftar depot mawar. Silahkan Login !!!');

        return redirect('/');
    }
}
