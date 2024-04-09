<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Provider extends Model
{
    use HasFactory;

    protected $table = 'provider';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'user_id',
        'name',
        'address',
    ];

    public function order(): HasMany {
        return $this->hasMany(Order::class);
    }
}
