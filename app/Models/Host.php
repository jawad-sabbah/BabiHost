<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','host_type'];

   
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    //one host has many properties
    public function properties()
    {
        return $this->hasMany(Property::class, 'host_id', 'id'); //first parameter is the foreign key of properties table , second pk of host table
    }
}
