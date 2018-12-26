<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = "pembelian";
    protected $fillable = [
    						'tanggal',
    						'id_bahan',
    						'qty',
    						'harga',
    						'id_kas'
    					];
}
