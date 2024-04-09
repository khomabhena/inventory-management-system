<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DeliveryDetail extends Model
{
    use HasFactory;
    protected $table = "delivery_details";
    protected $fillable = [
        'id',
        'deliveries_id',
        'products_id',
        'quantity',
        'expected_date',
        'actual_date',
    ];

    public function deliveries(): BelongsTo {
        return $this->belongsTo(Delivery::class);
    }
}
