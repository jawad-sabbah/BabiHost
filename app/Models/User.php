<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    
    use HasFactory;

    protected $primaryKey = 'user_id';

    protected $fillable = ['name','email','password','phone'];

   
    //define relationships

    public function hosts()
    {
        return $this->hasOne(Host::class,'user_id','user_id');
    }

    //this return many bookings made by a user
    public function bookings()
    {
        return $this->hasMany(Booking::class,'user_id','user_id');
    }

    //return all favorites of a user
    public function favorites()
    {
        return $this->hasMany(Favorite::class,'user_id','user_id');
    }

    //this return  reviews made by a user
    public function reviews()
    {
        return $this->hasMany(Review::class,'user_id','user_id');
    }

}
