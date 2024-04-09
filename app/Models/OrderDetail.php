<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $fillable = [
        'id',
        'orders_id',
        'product_id',
        'quantity',
        'expected_date',
        'actual_date',
        'delivered',
    ];
    
    public function orders(): BelongsTo {
        return $this->belongsTo(Order::class);
    }
}
