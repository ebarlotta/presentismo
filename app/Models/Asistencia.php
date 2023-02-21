<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    public function obra_row()
    {
        return $this->hasOne(Obra::class, 'id', 'obra_id');
    }

    public function empresa_row()
    {
        return $this->hasOne(empresa::class, 'id', 'empresa_id');
    }

    public function usuario_row()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
