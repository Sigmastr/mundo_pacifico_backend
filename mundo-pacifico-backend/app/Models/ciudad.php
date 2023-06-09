<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ciudad extends Model
{
    use HasFactory;
    protected $table = 'ciudades';
    protected $fillable = [
        'nombre',
        'id_provincia',
    ];
    public function calle()
    {
        return $this->hasMany(calle::class, 'id_ciudad');
    }
}
