<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;

    protected $table = 'appointments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'date',
        'collector_id',
        'landmark',
        'house_number',
        'user_id',
        'status',

    ];

    /**
     * Connects it to the User class
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
    /**
     * Connects it to the Collector class
     */
    public function collector(){
        return $this->belongsTo(Collector::class);
    }
}
//AIzaSyBmUioxG2m8Bm14O5opTZg9wmwWLsru6tU
