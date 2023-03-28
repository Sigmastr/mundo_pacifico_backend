<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calle extends Model
{
    use HasFactory;
    protected $table = 'calles';
    protected $fillable = [
        'nombre',
        'id_ciudad',
    ];

    public function ciudad()
    {
        return $this->belongsTo(ciudad::class, 'id_ciudad');
    }
}
