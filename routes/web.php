<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//// Guest
//Route::get('/', function () {
//    return view('guest.beranda');
//});
//
//Route::get('/contact', function () {
//    return view('guest.contact');
//});
//
//Route::get('/produk', function () {
//    return view('guest.product');
//});
//
//Route::get('/detail', function () {
//    return view('guest.detail');
//});
//
//Route::get('/registrasi', function () {
//    return view('guest.account');
//});
//
//// Member


// * Login --------------------------------------------------------------------------------------------------------
Route::get('login',['as' => 'login','uses' => 'loginController@viewLogin']);
Route::post('/log','loginController@postLogin');

// * Tampilan Guest -------------------------------------------------------------------------------------------------
Route::get('/', 'tampilanController@index');
Route::get('produk', 'tampilanController@viewProductGuest');
Route::get('registrasi', 'tampilanController@viewRegister');
Route::post('registrasi','tampilanController@postRegister');
Route::get('contact', 'tampilanController@viewContact');

// * Member -------------------------------------------------------------------------------------------------------
Route::get('/member', 'c_member@index');
Route::get('/member/produk', 'c_member@viewProduct');
Route::get('/member/cart/add/{id}', 'c_member@addItem');
Route::get('/member/detail/{id}', 'c_member@viewDetail');
Route::get('/member/contact', 'c_member@viewContact');
Route::get('/member/account', 'c_member@viewAccount');
Route::get('/member/chekout', 'c_member@viewCheckout');
Route::get('/member/pay/{id}', 'c_member@viewPayment');
Route::post('/member/pay/{id}', 'c_member@prosesPayment');
Route::get('/member/logout', 'c_member@logout');

//admin
//logout
Route::get('adm_dash/logout','c_admin@logout');

// Home dashboard
Route::get('/adm_dash', 'c_admin@index');
Route::post('/adm_dash/{id}', 'c_admin@changeSlider');

// admin user
Route::get('adm_dash_user','c_admin@adminuser');
Route::post('adm_dash_user','c_admin@postAdminuser');

// Pesanan
Route::get('/adm_pesanan', 'c_admin@pesanan');
Route::get('/adm_pesanan_terima', 'c_admin@pesanan_terima');
Route::get('/adm_pesanan_terima/{id}', 'c_admin@pesanan_terima_ok');
Route::get('/adm_pesanan_tolak', 'c_admin@pesanan_tolak');
Route::get('/adm_pesanan_tolak/{id}', 'c_admin@pesanan_tolak_ok');
Route::get('/adm_dtl_pesanan/{id}', 'c_admin@dtl_pesanan');
Route::get('/adm_dtl_pesanan_print/{id}', 'c_admin@dtl_pesanan_print');

// Makanan
Route::get('/adm_d_makanan', 'c_admin@d_makanan');
Route::get('/adm_t_makanan', 'c_admin@t_makanan');
Route::post('/adm_t_makanan', 'c_admin@postMakanan');
Route::put('/adm_t_makanan/{id}','c_admin@updateMakanan');
Route::get('/adm_t_makanan/{id}/delete','c_admin@deleteMakanan');

// Minuman
Route::get('/adm_d_minuman', 'c_admin@d_minuman');
Route::get('/adm_t_minuman', 'c_admin@t_minuman');
Route::post('/adm_t_minuman', 'c_admin@postMinuman');
Route::put('/adm_t_minuman/{id}', 'c_admin@updateMinuman');
Route::get('/adm_t_minuman/{id}/delete', 'c_admin@deleteMinuman');

// Pelanggan
Route::get('/adm_pelanggan', 'c_admin@pelanggan');

