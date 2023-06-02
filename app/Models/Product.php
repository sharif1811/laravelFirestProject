<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function catagory(){
        return $this->belongsTo(Catagory::class);
    }
    public function color(){
        return $this->belongsTo(Color::class);
    }
    public function size(){
        return $this->belongsTo(Size::class);
    }
    public function vendor(){
        return $this->belongsTo(Vendor::class);
    }
    public function cart(){
        return $this->hasMany(Cart::class);
    }
    public function reviews(){
        return $this->hasMany(Review::class)->with('user');
    }
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
