<?php

use App\models\SanPham;
use App\Repositories\SanPhamRepository;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/product/{sach}',function(SanPham $sach,SanPhamRepository $sanPhamRepository,Request $request){
    $sach->avatars;
    $oldCart =  $request->session()->get('Cart') ? $request->session()->get('Cart') : null;
    $data['sach'] = $sach->toArray();
    $data['title'] = $sach['tenSP'];
    $data['related_product'] =  $sanPhamRepository->getRelatedProducts(['avatar']);
    return view('detail.index',['data'=>$data,'cart' => $oldCart]);
})->name('product.show');
