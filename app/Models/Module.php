<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'installation_date',
        'details',
        'status',

    ];

    public function mesures()
    {
        return $this->hasMany(Mesure::class);
    }
}
