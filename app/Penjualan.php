<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualans';
    protected $fillable = [
        'namaBarang', 'alamat', 'gambar', 
    ];
}
