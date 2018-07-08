<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'proveedores';

    protected $fillable = [
        'id','direccion','telefono','fecha_alta',
    ];

    public $timestamps = false;

    public function remito()
    {
        return $this->hasMany('App\Refer');
    }
}
