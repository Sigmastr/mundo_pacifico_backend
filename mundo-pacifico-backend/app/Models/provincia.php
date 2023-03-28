<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provincia extends Model
{
    use HasFactory;

    protected $table = 'provincias';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'id_region'
    ];
    public function region()
    {
        return $this->hasMany(region::class, 'id_region');
    }
}
