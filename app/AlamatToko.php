<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlamatToko extends Model
{
    protected $table = 'alamat_toko';
    protected $fillable = ['city_id','detail'];
}
