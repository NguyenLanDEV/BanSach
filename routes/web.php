<?php

use App\models\SanPham;
use App\Repositories\SanPhamRepository;
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

Route::resource('Sach', 'SanPhamController');
Route::resource('Cart', 'CartController');

Route::get('/product/{sach}',function(SanPham $sach,SanPhamRepository $sanPhamRepository){
    $sach->avatars;
    $data['sach'] = $sach->toArray();
    $data['title'] = $sach['tenSP'];
    $data['related_product'] =  $sanPhamRepository->getRelatedProducts(['avatar']);
    return view('detail',$data);
})->name('product.show');
