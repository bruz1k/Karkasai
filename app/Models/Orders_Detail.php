<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders_Detail extends Model
{
    protected $table="order_details";
    protected $fillable=["quantity", "orders_id", "products_id"];
    public function product() {return $this->belongsTo(Product::class, 'products_id');}
    public function order() {return $this->belongsTo(Order::class, 'orders_id','id');}
    use HasFactory;
}
