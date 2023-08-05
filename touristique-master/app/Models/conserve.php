<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

class conserve extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $fillable = [
        'voyage_nom',
        'profil_nom',
    ];
}
