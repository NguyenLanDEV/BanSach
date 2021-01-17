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
}
