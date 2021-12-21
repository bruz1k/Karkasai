<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersUsers extends Model
{
    protected $table="orders_users";
    protected $fillable=["users_id","orders_id"];
    public function user() {return $this->belongsTo(User::class);}
    public function order() {return $this->belongsTo(Order::class);}
    use HasFactory;
}
