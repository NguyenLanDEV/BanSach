<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NguoiDung extends Model
{
    use SoftDeletes;

    protected $table = 'NguoiDung';
    protected $attributes = [];
    protected $protected = ['tenTG', 'diaChi', 'sdt', 'gioiThieu'];
    public $incrementing = true;
}