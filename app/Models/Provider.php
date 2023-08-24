<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = ['city_id', 'name', 'lastname', 'document', 'phone', 'email', 'post', 'address'];

    public function city(){
        return $this->belongsTo(City::class);
    }
}
