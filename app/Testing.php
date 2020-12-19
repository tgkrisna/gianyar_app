<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testing extends Model
{
    protected $table = 'tb_user';
    protected $primaryKey = 'id';
    protected $fillable = ['us_name','email','pwd'];
    public $timestamps = false;
}
