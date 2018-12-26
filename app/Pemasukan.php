<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    protected $table = "pemasukan";
    protected $fillable = [
    						'tanggal',
    						'transaksi',
    						'id_kas',
    						'jumlah'
    					];
}
