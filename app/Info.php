<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [
        'titulo_principal', 'info_principal', 'info_nosotros', 'direccion',
      ];
}
