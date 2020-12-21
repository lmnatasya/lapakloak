<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    public function pembelian(){
        return $this->belongsTo('App\Pembelian', 'id_user', 'id');
    }
}
