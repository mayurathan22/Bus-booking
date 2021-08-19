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
        // 'available_seat',
        'estimate_time'
    ];
    
    public function bus($id){
        // return $this->belongsTo(Bus::class,'bus_id');
        return $bus=Bus::findOrFail($id);
    }
    public function ticketbooking($id){
        return $this->hasMany(TicketBooking::class,'trip_id','id');
    }
}
