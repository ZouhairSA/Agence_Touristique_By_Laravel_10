<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Contacte_send extends Model
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
