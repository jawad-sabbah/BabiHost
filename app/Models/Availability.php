<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    use HasFactory;

    protected $fillable = ['room_id','is_available'];

    
    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id', 'room_id');
    }
}
