<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    use HasFactory;

    public function tipodeiva()
    {
        return $this->hasOne(tipoiva::class, 'id', 'tipoiva_id');
    }
}
