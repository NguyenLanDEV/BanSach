<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CTDonHang extends Model
{
    use SoftDeletes;

    protected $table = 'CTDonHang';
    protected $attributes = [];
    protected $protected = ['maDH', 'maSP', 'gia', 'tongTienCT', 'soLuong'];
    public $incrementing = true;

    function sachs(){

    }


}
