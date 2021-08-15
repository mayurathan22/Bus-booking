<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $table="trips";
    protected $guarded = [
        'id',
    ];
    protected $fillable=[
        'bus_id',
        'from',
        'to',
        'available_seat',
        'estimate_time'
    ];
    
    public function bus(){
        return $this->belongsToMany(Bus::class);
    }
}
