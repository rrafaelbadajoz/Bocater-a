<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'address',
        'phone',
        'email',
    ];

    //Campos que no serán devueltos al hacer una consulta
    protected $hidden=[
        'created_at',
        'uptadet_at'
    ];

    //Campos cuyo tipo de datos será forzado
    protected $casts=[

    ];

    /**
     * Get all of the ingredients for the Provider
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

}
