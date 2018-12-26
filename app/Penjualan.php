<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
	protected $table = "penjualan";
	protected $fillable = [
							'tanggal',
							'id_produk',
							'harga',
							'qty',
						];
}
