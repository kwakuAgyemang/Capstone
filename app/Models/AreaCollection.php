<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaCollection extends Model
{
    use HasFactory;

    protected $table = 'area_collection';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'area_id',
        'collector_id',

    ];

    /**
     * Connects it to the User class
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function collector(){
        return $this->belongsTo(Collector::class);
    }
}
