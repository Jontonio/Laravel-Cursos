<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // Para permitir los campos sin que haya otro campo infriltado
    protected $fillable = [
        'name',
        'slug',
        'description',
        'category',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // método para guardar cualquier campo menos status
//    protected $guarded = ['status'];

}
