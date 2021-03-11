<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oxxo extends Model
{
    use HasFactory;

    protected $fillable = [
        'store',
        'phone',
        'address',
        'state',
    ];
}
