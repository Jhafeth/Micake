<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'stock',
        'medida_id'
    ];

    public function medida()
    {
        return $this->belongsTo('App\Models\Medida');
    }

    public function recetas()
    {
        return $this->belongsToMany('App\Models\Receta')->withPivot('cantidad');
    }
}
