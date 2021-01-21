<?php

namespace App\Repositories;

use App\models\CTDonHang;
use App\models\SanPham;
use Illuminate\Database\Eloquent\Builder;

class SanPhamRepository
{
    public function getByID($id,$select=[])
    {
        if($select)
            return SanPham::select($select)->find($id)->toArray();
        else
            return SanPham::find($id)->toArray();

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

    public function getRelatedProducts($with)
    {
        return SanPham::whereHas('ctDonHang', function (Builder $query) {
            $query->orderBy('created_at', 'desc');
        })->distinct()->with($with)->take(env('HOMEPAGE_LIMIT'))->get();
    }
}
