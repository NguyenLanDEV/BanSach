<?php

use App\models\SanPham;
use Illuminate\Support\Facades\Route;
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

Route::get('/','HomeController@index');

Route::get('/product/{sach}',function(SanPham $sach){
    $sach->avatars;
    $sach->avatar;
    $data['sach'] = $sach->toArray();
    $data['title'] = $sach['tenSP'];
    // dd($data);
    return view('detail',$data);
});
