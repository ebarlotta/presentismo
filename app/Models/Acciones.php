<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acciones extends Model
{
    use HasFactory;

    public function actividad_row()
    {
        return $this->hasOne(Actividad::class, 'id', 'actividad_id');
    }

    public function obra_row()
    {
        return $this->hasOne(Obra::class, 'id', 'obra_id');
    }

    public function empresa_row()
    {
        return $this->hasOne(empresa::class, 'id', 'empresa_id');
    }

    public function novedad_row()
    {
        return $this->hasOne(Novedad::class, 'id', 'novedad_id');
    }
}
