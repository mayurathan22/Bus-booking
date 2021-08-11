<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $table="buses";
    protected $guarded = [
        'id',
    ];
    protected $fillable=['agency_name','seat_no','description'];

    public function busschedule(){
        return $this->belongsToMany(BusSchedule::class);
    }

    public function busroute(){
        return $this->belongsToMany(BusRoute::class);
    }
}
