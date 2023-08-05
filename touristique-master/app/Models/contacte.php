<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacte extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $fillable = [
        'name_contact',
        'lastname_contact',
        'telephone',
        'email',
        'message',
    ];
}
