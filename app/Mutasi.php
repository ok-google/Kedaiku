<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutasi extends Model
{
    protected $table = "mutasi";
    protected $fillable = [
    						'tanggal', 
    						'id_kas_debet', 
    						'jumlah_debet', 
    						'id_kas_kredit',
    						'jumlah_kredit'
    					];
}
