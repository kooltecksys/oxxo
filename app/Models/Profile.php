<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'oxxo_id',
        'name',
        'psurname',
        'msurname',
        'email',
        'employee',
        'phone',
        'birthday',
        'tienda',
        'points',
    ];
}
