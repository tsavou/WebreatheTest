<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesure extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_mesure',
        'module_id',
        'valeur_mesuree',
        'date_mesure',
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }


}
