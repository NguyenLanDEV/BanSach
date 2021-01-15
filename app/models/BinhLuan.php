<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BinhLuan extends Model
{
    use SoftDeletes;

    protected $table = 'PhieuNhap';
    protected $attributes = [];
    protected $protected = ['maPN', 'maND', 'ngayNhap', 'soLuong', 'tongTien', 'ghiChu'];
    public $incrementing = true;
}
