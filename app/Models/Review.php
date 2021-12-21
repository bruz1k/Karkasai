<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table="reviews";
    protected $fillable=["rating", "comments", "products_id", "users_id"];
    public function product() {return $this->belongsTo(Product::class);}
    public function user() {return $this->belongsTo(User::class);}

    use HasFactory;
}
