<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusSchedule extends Model
{
    use HasFactory;

    protected $table="bus_schedules";
    protected $guarded = [
        'id',
    ];
    protected $fillable=['route_id','bus_id'];
    
    public function bus(){
        return $this->belongsToMany(Bus::class);
    }
}
