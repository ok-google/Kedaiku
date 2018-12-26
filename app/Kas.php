<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kas extends Model
{
    protected $table = "kas";
    protected $fillable = ['nama', 'saldo', 'isDefault'];
}
