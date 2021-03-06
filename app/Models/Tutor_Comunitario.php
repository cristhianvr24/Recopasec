<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor_Comunitario extends Model
{
    use HasFactory;
    protected $fillable = [
        'cedula',
        'Primer nombre',
        'Segundo nombre',
        'Primer apellido',
        'Segundo apellido',
        'telefono',
        'email',
        'consejo comunal',
        'cargo'
    ];
    public function Estado(){
        return $this->belongsTo(Estado::class);
    }
}

