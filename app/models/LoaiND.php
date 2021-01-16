<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoaiND extends Model
{
    use SoftDeletes;
    protected $table = 'LoaiND';
    protected $attributes = [];
    protected $protected = ['tenTG', 'diaChi', 'sdt', 'gioiThieu'];
    public $incrementing = true;
}
