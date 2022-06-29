<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'precio'
    ];

    public function recetas()
    {
        return $this->belongsToMany('App\Models\Receta')->withPivot('cantidad');
    }
}
