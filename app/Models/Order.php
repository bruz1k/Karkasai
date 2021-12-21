<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable =["date_added"];
    public function OrderDetails(){return $this->hasMany(Orders_Detail::class,'orders_id');}
    public function OrderUsers() { return $this->hasMany(OrdersUsers::class); }
    use HasFactory;
}
