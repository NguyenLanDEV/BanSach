<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NhomSP extends Model
{
    use SoftDeletes;

    protected $table = 'NhomSP';
    protected $attributes = [];
    protected $protected = ['tenNSP', 'maDM'];
    public $incrementing = true;
}
