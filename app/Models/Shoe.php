<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    use HasFactory;

    protected $table = 'shoes';
    protected $fillable = ['name', 'size', 'color', 'type', 'pro_id'];


    public function brand(){
        return $this->belongsTo(Brand::class, 'pro_id', 'brand_id');
    }


}
