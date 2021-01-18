<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhieuNhap extends Model
{
    use SoftDeletes;

    protected $table = 'PhieuNhap';
    protected $attributes = [];
    protected $protected = ['maSP', 'maND', 'noiDung', 'ngayBL'];
    public $incrementing = true;
}
