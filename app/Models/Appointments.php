<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;

    protected $table = 'apponintments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'date',
        'collector_id',
        'landmark',
        'regularity',
        'house_number',
        'user_id'

    ];
}
//AIzaSyBmUioxG2m8Bm14O5opTZg9wmwWLsru6tU
