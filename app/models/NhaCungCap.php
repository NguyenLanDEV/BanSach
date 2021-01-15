<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NhaCungCap extends Model
{
    use SoftDeletes;

    protected $table = 'PhieuNhap';
    protected $attributes = [];
    protected $protected = ['tenNCC', 'diaChi', 'SDT'];
    public $incrementing = true;
}
