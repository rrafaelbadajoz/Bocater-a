<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'file_name', //Almacena el nombre del fichero.
        'file_path', //Almacena el path del fichero
        'short',
        'desc',
        'price',
    ];

    //Campos que no serán devueltos al hacer una consulta
    protected $hidden=[
        'created_at',
        'uptadet_at'
    ];

    //Campos cuyo tipo de datos será forzado
    protected $casts=[

    ];


    public function ingredients(){
        return $this->belongsToMany(Ingredient::class)->orderBy('name');
    }

/*
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //???
    public function purchases(){
        return $this->belongsToMany(Purchase::class);
    }
*/

}
