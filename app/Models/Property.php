<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable=['host_id','name','description','type','city','address','status'];

    public function host()
    {
       return $this->belongsTo(Host::class,'host_id','id');
    }

    public function rooms()
    {
       return $this->hasMany(Room::class,'property_id','id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class,'property_id','id');
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class,'property_id','id');

    }


}
