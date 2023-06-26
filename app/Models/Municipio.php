<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $fillable = ['ibge_id', 'ibge_name'];

    protected $table = 'municipios';
}
