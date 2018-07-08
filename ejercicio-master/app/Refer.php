<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refer extends Model
{
    protected $table = 'remitos';

    protected $fillable = [
        'id','fecha_emision','monto_total','proveedor_id',
    ];

    public $timestamps = false;

    public function proveedor()
    {
        return $this->belongsTo('App\Provider');
    }
}
