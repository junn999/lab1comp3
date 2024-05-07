<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblmascotasperdidas extends Model
{
    protected $fillable=[
        'nombre',
        'color',
        'sexo',
        'raza',
        'tipo_de_mascota'
    ];
    use HasFactory;
}