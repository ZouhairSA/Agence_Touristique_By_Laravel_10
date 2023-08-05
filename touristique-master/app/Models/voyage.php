<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voyage extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'nom_voyage',
        'description',
        'prix',
        'total_reserved',
        'duree_voyage',
        'restauration',
        'date_depart',
        'date_arriver'
    ];
}
