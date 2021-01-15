<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use  Illuminate\Database\Eloquent\SoftDeletes;

class TacGia extends Model
{
    use SoftDeletes;

    protected $table = 'TacGia';
    protected $attributes = [];
    protected $protected = ['tenTG', 'diaChi', 'sdt', 'gioiThieu'];
    public $incrementing = true;
}
