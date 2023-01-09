<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function subcatagory(){
        return $this->hasMany(Subcatagory::class);
    }
    public function brand(){
        return $this->hasMany(Brand::class);
    }
    public function color(){
        return $this->hasMany(Color::class);
    }
    public function size(){
        return $this->hasMany(Size::class);
    }
    public function product(){
        return $this->hasMany(Product::class);
    }
    public function vendor(){
        return $this->hasMany(Vendor::class);
    }
}
