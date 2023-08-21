<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cycle extends Model
{
    
    use HasFactory;


    // Specify the fillable fields
    protected $fillable = [
        'nom_entreprise',
        'num_action',
        'credit_impot',
        // Add other fillable fields
        'droit_tirage_indiv',
        'droit_tirage_collec',
        'theme_formation',
        'mode_formation',
        'lieu_formation',
        'gouvernorat',
        'periode',
    ];

    // Define any additional methods or relationships here
    // ...

    // For example, if you want to define a relationship with other models:
    // public function someOtherModel()
    // {
    //     return $this->belongsTo(SomeOtherModel::class);
    // }
}

