<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $table = 'coupons';
    protected $fillable = [
        'code',
        'discount_percentage',
        'start_date',
        'end_date',
        'limit',
        'limit_used',
        'is_active',
    ];

    public function getCreatedAtAttribute($value)
    {
        return date('Y-m-d H:i:s', strtotime($value));
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('Y-m-d H:i:s', strtotime($value));
    }
    public function scopeValid($query){
        return $query->where('is_active', 1)
                     ->where('limit_used', '<', 'limit')
                     ->where('end_date', '>', now());
    }

    public function scopeNotValid($query){
        return $query->where('is_active', 0)
            ->orWhere('limit_used', '>=', 'limit')
            ->orWhere('end_date', '<', now());
    }

    public function couponIsValid(){
        return $this->is_active == 1  && $this->end_date > now() && $this->limit_used < $this->limit;
    }
}
