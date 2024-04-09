<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Delivery extends Model
{
    use HasFactory;
    protected $table = "deliveries";
    protected $fillable = [
        'id',
        'customers_id',
        'sales_date',
    ];

    public function delivery_details(): HasMany {
        return $this->hasMany(DeliveryDetail::class);
    }
}
