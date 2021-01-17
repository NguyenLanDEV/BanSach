<?php

namespace App\Repositories;

use App\models\SanPham;

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
}
