<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    // Agrega aquí los campos que se permiten para la asignación masiva
    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'genero',
        'telefono',
        'direccion',
    ];

    public function historiales()
    {
        return $this->hasMany(HistorialClinico::class);
    }
}

