<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DanhMucSP extends Model
{
    use SoftDeletes;
    protected $table = 'HinhAnh';
    protected $attributes = [];
    protected $protected = ['tenTG', 'diaChi', 'sdt', 'gioiThieu'];
    public $incrementing = true;
}
