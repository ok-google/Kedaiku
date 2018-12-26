<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $table = "pengeluaran";
    protected $fillable = [
    						'tanggal',
    						'transaksi',
    						'id_kas',
    						'jumlah'
    					];
}
