<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inventory extends Model
{
    use HasFactory;
    protected $table = 'inventories';
    protected $fillable = [
        'id',
        'order_details_id',
        'products_id',
        'warehouses_id',
        'quantity',
        'min_stock_level',
        'max_stock_level',
        'reorder_point',
    ];

    public function order_details(): BelongsTo {
        return $this->belongsTo(OrderDetail::class);
    }
}
