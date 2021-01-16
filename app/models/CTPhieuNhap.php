<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CTPhieuNhap extends Model
{
    use SoftDeletes;

    protected $table = 'CTPhieuNhap';
    protected $attributes = [];
    protected $protected = ['maPN', 'maSP','maNCC','giaNhap','soLuong','tongTien','ghiChu'];
    public $incrementing = true;
}
