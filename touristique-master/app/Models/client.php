<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class client extends Model
{
    use CrudTrait;
    use HasFactory;

    // use Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'job',
        'password'
    ];
}
