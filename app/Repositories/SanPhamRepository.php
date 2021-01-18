<?php

namespace App\Repositories;

<<<<<<< HEAD
use App\models\CTDonHang;
use App\models\SanPham;
use Illuminate\Database\Eloquent\Builder;
=======
use App\models\SanPham;
>>>>>>> 0687456d36df1cede3ea9932173e0a7406846020

class SanPhamRepository
{
    function getByID($id)
    {
    }


    function getNewProducs($with = [])
    {
        $data = [];
        $data['tre_em'] = SanPham::where('maNhomSP', 1)->orderBy('created_at')->with($with)->take(env('HOMEPAGE_LIMIT'))->get();
        $data['ky_nang'] = SanPham::where('maNhomSP', 2)->orderBy('created_at')->with($with)->take(env('HOMEPAGE_LIMIT'))->get();
        $data['van_hoc'] = SanPham::where('maNhomSP', 3)->orderBy('created_at')->with($with)->take(env('HOMEPAGE_LIMIT'))->get();
        $data['kinh_te'] = SanPham::where('maNhomSP', 4)->orderBy('created_at')->with($with)->take(env('HOMEPAGE_LIMIT'))->get();
        return $data;
    }
<<<<<<< HEAD

    public function getRelatedProducts($with)
    {
        return SanPham::whereHas('ctDonHang', function (Builder $query) {
            $query->orderBy('created_at', 'desc');
        })->distinct()->with($with)->take(env('HOMEPAGE_LIMIT'))->get();
    }
=======
>>>>>>> 0687456d36df1cede3ea9932173e0a7406846020
}
