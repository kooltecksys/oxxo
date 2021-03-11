<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoneMission extends Model
{
    use HasFactory;

    protected $table = 'done_missions';

    protected $fillable = [
        'user_id',
        'mission_id',
        'oxxo_id',
        'photo',
        'latitude',
        'longitude',
        'points',
    ];
}
