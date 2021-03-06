<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketBooking extends Model
{
    use HasFactory;
    
    protected $table="ticket_bookings";
    protected $guarded = [
        'id',
    ];
    protected $fillable=[
        'trip_id',
        'passenger_name',
        // 'seat_no',
        'mobile_number',
        'user_id',
    ];

    protected $casts = [
        'seat_no' => 'array'
    ];

    public function trip($id){
        return $trip=Trip::findOrFail($id);
    }
}
