<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    #one to many (category has many services)
    public function services(){
        return $this->hasMany(Service::class);
    }
}
