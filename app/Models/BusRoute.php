<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusRoute extends Model
{
    use HasFactory;

    protected $table="bus_routes";
    protected $guarded = [
        'id',
    ];
    protected $fillable=['from','to','estimate_time'];

    public function bus(){
        return $this->belongsToMany(Bus::class);
    }
}
