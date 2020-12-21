<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class katalog extends Model
{
	protected $table = 'katalogs';
    protected $fillable = [
        'nama', 'gambar', 'harga', 'stok', 'deskripsi', 
    ];

    public function user(){
        return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function pembelian(){
        return $this->belongsTo('App\Pembelian', 'id_katalog', 'id');
    }
}
