<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $primaryKey = 'brand_id';
    protected $keyType = 'string';

    //memanggil table dari table brand didatabase
    protected $table = 'brands';
    //supaya bisa diisi ditable database
    protected $fillable = ['brand_id' ,'name', 'state'];


    public function shoes(){
        return $this->hasMany(Brand::class, 'pro_id', 'brand_id');
    }
}
