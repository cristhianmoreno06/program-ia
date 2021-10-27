<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * @property double $decimal
 * @property double $adaptacion
 * @property double $probabilidad
 * @property double $q
 */
class Total extends Model
{
    protected $fillable = [
        'decimal',
        'adaptacion',
        'probabilidad',
        'q'
    ];
}
