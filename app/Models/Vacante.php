<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    use HasFactory;

    // Campos que se agregaran
    protected $fillable = [
        'titulo', 'imagen', 'descripcion', 'skills', 'categoria_id', 'experiencia_id', 'ubicacion_id', 'salario_id'
    ];

    // Relación 1:1 categoria y vacante
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    // Relación 1:1 salario y vacante
    public function salario()
    {
        return $this->belongsTo(Salario::class);
    }

    // Relación 1:1 ubicacion y vacante
    public function ubicacion()
    {
        return $this->belongsTo(Ubicacion::class);
    }

    // Relación 1:1 experiencia y vacante
    public function experiencia()
    {
        return $this->belongsTo(Experiencia::class);
    }

    // Relación 1:1 reclutador y vacante
    public function reclutador()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
