<?php

namespace App\Http\Controllers;

use App\Models\m_members;
use App\Models\m_order_detail;
use App\Models\m_orders;
use App\Models\m_product;
use App\Models\m_testimoni;
use App\Models\m_user;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class c_member extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rule:member');
    }

    public function index()
    {
        return view('member.index');
    }

    public function viewProduct()
    {
        $data = m_product::where('product_id', '<>', 0)->simplePaginate(9);
        return view('member.product', compact('data'));
    }

    public function viewDetail($id)
    {
        $data = m_product::where('product_id', $id)->first();
        return view('member.detail', compact('data'));
    }

    public function viewContact()
    {
        return view('member.contact');
    }

    public function viewAccount()
    {
        $user = Auth::user();
        $data_member = m_members::where('user_id', $user->user_id)->first();
        $data_user = m_user::where('user_id', $user->user_id)->first();
        $orders = m_orders::where('member_id', $data_member->member_id)->paginate(5);
        return view('member.account', compact('data_user', 'orders', 'data_member'));
    }

    public function viewCheckout()
    {
        $cartItems = Cart::content();
        return view('member.chekout', compact('cartItems'));
    }

    public function viewPayment($id)
    {
        $user = Auth::user();
        $data_member = m_members::where('user_id', $user->user_id)->first();
        $order = m_orders::where('member_id', $data_member->member_id)->where('order_id', $id)->first();
        return view('member.payment', compact('data_member', 'order'));
    }

    public function prosesPayment(Request $request, $id)
    {
        $ext = $request->file('bukti')->getClientOriginalExtension();
        $name = 'bukti_'.$id . '.' . $ext;
        $request->file('bukti')->move('images/', $name);

        $orders = m_orders::where('order_id', $id)->first();
        $orders->image_url = $name;
        $orders->update();

        return redirect('/member/account');
    }

    public function addItem($id)
    {
        $product = m_product::where('product_id', $id)->first();
        Cart::add(['id' => $product->product_id, 'name' => $product->product_name, 'qty' => 1, 'price' => $product->unit_price, 'category' => $product->kecategory->category]);
        return back();
    }

    public function removeItem($id)
    {
        Cart::remove($id);
        return back();
    }


    public function update(Request $request)
    {
        $user = Auth::user();
        $akun = m_user::where('user_id', $user->user_id)->first();
        $akun->username = $request->username;
        $akun->password = bcrypt($request->password);
        $akun->update();

        $member = m_members::where('user_id', $user->user_id)->first();
        $member->name = $request->name;
        $member->address = $request->address;
        $request->handphone = $request->handphone;
        $member->update();

        return redirect('/member');
    }

    public function logout()
    {
        Auth::logout();
        Cart::destroy();
        return redirect('/');
    }
}
