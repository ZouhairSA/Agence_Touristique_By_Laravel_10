<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'id_voyage',
        'id_ville',
        'nom_ville',
        'nom_voyage',
    ];
}
