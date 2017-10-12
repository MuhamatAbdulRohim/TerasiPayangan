<?php

namespace App\Http\Controllers;

use App;
use App\Models\m_members;
use App\Models\m_orders;
use App\Models\m_user;
use App\Models\m_product;
use App\Models\m_testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class c_admin extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('rule:admin');
    }

    // Dashboard
    public function index()
    {
        $data [0] = m_members::count();
        $data [1] = m_orders::where('order_status','menunggu')->count();
        $data [2] = m_orders::where('order_status','diterima')->count();
        $data [3] = m_orders::where('order_status','ditolak')->count();
        return view('admin.dashboard', compact('data'));
    }

    public function changeSlider(Request $request, $id)
    {
        $ext = $request->file('file_' . $id)->getClientOriginalExtension();
        $name = $id . '.' . $ext;
        $request->file('file_' . $id)->move('slider/', $name);
        return redirect('/adm_dash');
    }

    // Pesanan
    public function pesanan()
    {
        $data = m_orders::where('order_status','menunggu')->get();
//        $data = DB::table('orders')
//            ->join('members', 'orders.member_id', '=', 'members.member_id')
//            ->select('orders.order_id', 'members.name', 'members.address', 'members.handphone', 'orders.total_price', 'orders.order_date')
//            ->get();
        return view('admin.pesanan', compact('data'));
    }

    public function pesanan_terima(){
        $data = m_orders::where('order_status','diterima')->get();
        return view('admin.pesanan_terima', compact('data'));
    }

    public function pesanan_terima_ok($id){
        $data = m_orders::where('order_id',$id)->first();
        $data->order_status = 'diterima';
        $data->update();

        return redirect('adm_pesanan');
    }

    public function pesanan_tolak(){
        $data = m_orders::where('order_status','ditolak')->get();
        return view('admin.pesanan_tolak', compact('data'));
    }

    public function pesanan_tolak_ok($id){
        $data = m_orders::where('order_id',$id)->first();
        $data->order_status = 'ditolak';
        $data->update();

        return redirect('adm_pesanan');
    }

    public function dtl_pesanan($id)
    {
        $data [0] = DB::table('members')
            ->join('orders', 'members.member_id', '=', 'orders.member_id')
            ->where('orders.order_id', '=', $id)
            ->select('members.name', 'members.address', 'members.handphone', 'orders.invoice', 'orders.member_id', 'orders.order_id', 'orders.total_price')
            ->get();
        $data [1] = DB::table('order_detail')
            ->join('product','order_detail.product_id', '=', 'product.product_id')
            ->where('order_detail.order_id', '=', $id)
            ->select('order_detail.quantity', 'order_detail.note', 'order_detail.unit_price', 'product.product_name', 'product.product_id')
            ->get();
        $data[2] = m_orders::where('order_id',$id)->first();
        return view('admin.dtl_pesanan', compact('data'));
    }

    public function dtl_pesanan_print($id)
    {
        $data [0] = DB::table('members')
            ->join('orders', 'members.member_id', '=', 'orders.member_id')
            ->where('orders.order_id', '=', $id)
            ->select('members.name', 'members.address', 'members.handphone', 'orders.invoice', 'orders.member_id', 'orders.order_id', 'orders.total_price')
            ->get();
        $data [1] = DB::table('order_detail')
            ->join('product','order_detail.product_id', '=', 'product.product_id')
            ->where('order_detail.order_id', '=', $id)
            ->select('order_detail.quantity', 'order_detail.note', 'order_detail.unit_price', 'product.product_name', 'product.product_id')
            ->get();

        return view('admin.dtl_pesanan_print', compact('data'));
    }

    // Makanan
    public function d_makanan()
    {
        $data = m_product::where('category_id','1')->orwhere('category_id','2')->orwhere('category_id','3')->orderby('category_id','ASC')->get();
        return view('admin.d_makanan', compact('data'));
    }

    public function t_makanan()
    {
        return view('admin.t_makanan');
    }

    public function postMakanan(Request $request){

        $extension = $request->file('image_url')->getClientOriginalExtension();
        $buat = new m_product();
        $buat->product_name = $request->product_name;
        $buat->category_id = $request->category_id;
        $buat->unit_price = $request->unit_price;
        $buat->save();
        $filename = 'makanan-' . $buat->product_id . '-' . $buat->category_id . '.' . $extension;
        $buat->image_url = $filename;
        $buat->update();

        if ($request->category_id == 1){
            $request->file('image_url')->move('product/anekamie/',$filename);

        }elseif ($request->category_id == 2){
            $request->file('image_url')->move('product/indonesianfood/',$filename);

        }elseif ($request->category_id == 3){
            $request->file('image_url')->move('product/chinesefood/',$filename);
        }

        return redirect('adm_t_makanan');

    }

    public function updateMakanan(Request $request, $id){

        if ($request->file('image_url') == null){
            $updatemakanan = m_product::find($id);
            $updatemakanan->product_name = $request->product_name;
            $updatemakanan->category_id = $request->category_id;
            $updatemakanan->unit_price = $request->unit_price;
            $updatemakanan->update();

        }else{
            $extension = $request->file('image_url')->getClientOriginalExtension();
            $updatemakanan = m_product::find($id);
            $updatemakanan->product_name = $request->product_name;
            $updatemakanan->category_id = $request->category_id;
            $updatemakanan->unit_price = $request->unit_price;
            $updatemakanan->update();

            $filename = 'makanan-' . $updatemakanan->product_id . '-' . $updatemakanan->category_id . '.' . $extension;
            $updatemakanan->image_url = $filename;
            $updatemakanan->update();

            if ($request->category_id == 1){
                $request->file('image_url')->move('product/anekamie/',$filename);

            }elseif ($request->category_id == 2){
                $request->file('image_url')->move('product/indonesianfood/',$filename);

            }elseif ($request->category_id == 3){
                $request->file('image_url')->move('product/chinesefood/',$filename);
            }
        }

        return redirect('adm_d_makanan');
    }

    public function deleteMakanan($id){

        $makan = m_product::find($id);
        $makan->delete();

        return redirect('adm_d_makanan');
    }

    // Minuman
    public function d_minuman()
    {
        $data = m_product::where('category_id','4')->orwhere('category_id','5')->get();
        return view('admin.d_minuman', compact('data'));
    }

    public function t_minuman()
    {
        return view('admin.t_minuman');
    }

    public function postMinuman(Request $request){

        $extension = $request->file('image_url')->getClientOriginalExtension();
        $buatminuman = new m_product();
        $buatminuman->product_name = $request->product_name;
        $buatminuman->category_id = $request->category_id;
        $buatminuman->unit_price = $request->unit_price;
        $buatminuman->save();
        $filename = 'minuman-'. $buatminuman->product_id . '-' . $buatminuman->category_id . '.' . $extension;
        $buatminuman->image_url = $filename;
        $buatminuman->update();
        $request->file('image_url')->move('product/minuman/',$filename);

        return redirect('adm_t_minuman');

    }

    public function updateMinuman(Request $request, $id){



        if ($request->file('image_url') == null){
            $buatminuman = m_product::find($id);
            $buatminuman->product_name = $request->product_name;
            $buatminuman->category_id = $request->category_id;
            $buatminuman->unit_price = $request->unit_price;
            $buatminuman->update();
        }else{

            $extension = $request->file('image_url')->getClientOriginalExtension();
            $buatminuman = m_product::find($id);
            $buatminuman->product_name = $request->product_name;
            $buatminuman->category_id = $request->category_id;
            $buatminuman->unit_price = $request->unit_price;
            $buatminuman->update();
            $filename = 'minuman-'. $buatminuman->product_id . '-' . $buatminuman->category_id . '.' . $extension;
            $buatminuman->image_url = $filename;
            $buatminuman->update();
            $request->file('image_url')->move('product/minuman/',$filename);

        }

        return redirect('adm_d_minuman');
    }

    public function deleteMinuman($id){

        $minum = m_product::find($id);
        $minum->delete();

        return redirect('adm_d_minuman');
    }

    // Pelanggan
    public function pelanggan()
    {
        $data = m_members::all();
        return view('admin.pelanggan', compact('data'));
    }

    // Laporan
    public function laporan_harian()
    {
        //$data = m_orders::where('order_date', 'LIKE', '%' . date('Y-m-d') . '%')->get();
        $data = m_orders::where('order_status','diterima')->orderby('order_date','DESC')->get();
        return view('admin.laporan_harian', compact('data'));
    }

    public function laporan_bulanan()
    {
        $data = m_orders::distinct()->select('order_date_only')->where('order_status','diterima')->groupBy('order_date_only')->get();
        return view('admin.laporan_bulanan_month', compact('data'));
    }

    public function laporan_bulanan_month(Request $request){

        $data = m_orders::where('order_date','LIKE','%' . $request->order_date . '%')->get();
        return view('admin.laporan_bulanan', compact('data'));
    }

    // Kurir
    /*public function kurir()
    {
        $data = DB::table('orders')
            ->join('members', 'orders.member_id', '=', 'members.member_id')
            ->select('members.name', 'members.address', 'members.handphone', 'orders.order_id', 'orders.total_price', 'orders.order_status')
            ->get();
        return view('admin.kurir', compact('data'));
    }

    public function updateKurir(Request $request){
        DB::table('orders')
            ->where('order_id', $request->orderID)
            ->update(['order_status' => 1]);
        return redirect('/adm_kurir');
    }
    */

    // Testimoni
    public function testimoni()
    {
        $testimoni = m_testimoni::where('status','menunggu')->get();
        return view('admin.testimoni',compact('testimoni'));
    }

    public function testimoni_approve($id){

        $testimoni = m_testimoni::find($id);
        $testimoni->status = 'disetujui';
        $testimoni->update();

        return redirect('adm_testimoni');
    }

    public function testimoni_delete($id){

        $testmoni = m_testimoni::find($id);
        $testmoni->delete();

        return redirect('adm_d_testimoni');
    }

    public function d_testimoni()
    {
        $testimoni = m_testimoni::where('status','disetujui')->get();
        return view('admin.d_testimoni', compact('testimoni'));
    }

    //admin user
    public function adminuser(){

        $user = Auth::user();
        return view('admin.useradmin', compact('user'));
    }

    public function postAdminuser(Request $request){

        $user = Auth::user();
        $admin = m_user::find($user->user_id);
        $admin->username = $request->username;
        $admin->password = bcrypt($request->password);
        $admin->update();

        return redirect('adm_dash_user');
    }

    //logout
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
