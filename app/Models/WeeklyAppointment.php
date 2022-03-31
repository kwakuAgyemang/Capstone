<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeeklyAppointment extends Model
{
    use HasFactory;

    protected $table = 'weeklyappointments';

    protected $fillable = [
        'day_of_week',
        'user_id',
        'collector_id',
        'house_number',
        'landmark',
        'status',

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function collector(){
        return $this->belongsTo(Collector::class);
    }
}
