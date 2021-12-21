<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ["title","price","description","status"];
    public function OrderDetails(){return $this->hasMany(Orders_Detail::class);}
    public function Reviews(){return $this->hasMany(Review::class);}
    use HasFactory;
}
