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
    protected $fillable=[
        'name',
        'total_seat',
        'price',
        'description'
    ];

    public function trip(){
        return $this->hasMany(Trip::class,'bus_id','id');
    }

    public function busroute(){
        return $this->belongsToMany(BusRoute::class);
    }
}
