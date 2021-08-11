<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
    use HasFactory;

    protected $table="role_users";

    protected $guarded = [
        'id',
    ];
    protected $fillable=[
        'role_id','user_id'
    ];

    public function roles(){
        return $this->belongsTo(Role::class,'id');
    }

    // public function users(){
    //     return $this->hasMany(User::class,'role_id','id');
    // }

}
