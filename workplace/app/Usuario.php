<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'user_id';
    protected $table = 'usuarios';

    protected $fillable = [
        'user_name', 'user_birthday',
    ];

}
