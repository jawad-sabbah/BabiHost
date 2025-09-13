<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
   use HasFactory;

  protected $primaryKey = 'room_id';

 protected $fillable = ['property_id','name','type','price_per_night','description','status'];


   public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'id');
    }

     public function availability()
    {
        return $this->hasOne(Availability::class, 'room_id', 'room_id');
    }

      public function bookings()
    {
        return $this->hasMany(Booking::class, 'room_id', 'room_id');
    }

}
