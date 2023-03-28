<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class region extends Model
{
    use HasFactory;

    protected $table = 'regiones';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',

    ];

    public function provincia()
    {
        return $this->belongsTo(provincia::class, 'id_region');
    }
}
