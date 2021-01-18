<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class SanPham extends Model
{
    use SoftDeletes;

    protected $table = 'SanPham';
    protected $attributes = [];
    protected $protected = ['maLoai', 'tenSP','gia','soLuong','maTG','moTa','soTrang','loaiBia','kichThuoc','canNang','ngonNgu','NXB','namXB','dichGia'];
    public $incrementing = true;

    function avatar(){
        return $this->hasOne(HinhAnh::class,'id');
    }

    function avatars(){
        return $this->hasMany(HinhAnh::class,'maSP');
    }
<<<<<<< HEAD
<<<<<<< HEAD

    function ctDonHang(){
        return $this->hasMany(CTDonHang::class,'maSP');
    }
=======
>>>>>>> 2597cce...  tạm commit
=======
>>>>>>> 0687456d36df1cede3ea9932173e0a7406846020
}
