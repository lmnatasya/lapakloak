<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{

    public function katalog(){
        return $this->hasMany('App\katalog', 'id_katalog', 'id');
    }

    public function pembayaran(){
        return $this->hasOne('App\Pembayaran', 'id_pembayaran', 'id');
    }
}
