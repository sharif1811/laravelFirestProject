<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcatagory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function catagory(){
        return $this->belongsTo(Catagory::class);
    }
}
