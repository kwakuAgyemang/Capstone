<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Collector extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'password',
        'vehicle_num',
        'profile_pic',
        'phone_num'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Connects it to the Appointments class
     */
    public function appointments(){
        return $this->hasMany(Appointments::class);
    }

    /**
     * Connects it to the WeeklyAppointments class
     */
    public function weeklyAppointments(){
        return $this->hasMany(WeeklyAppointments::class);
    }

    public function areacollection(){
        return $this->hasMany(AreaCollection::class);
    }
}
