<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoaiSp extends Model
{
    use SoftDeletes;

    protected $table = 'LoaiSP';
    protected $attributes = [];
    protected $protected = ['tenLoai', 'maNSP'];
    public $incrementing = true;
}
