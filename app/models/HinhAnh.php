<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HinhAnh extends Model
{
    use SoftDeletes;

    protected $table = 'HinhAnh';
    protected $attributes = [];
    protected $protected = ['maSP', 'duongDan'];
    public $incrementing = true;
}
