<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
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

    public function getCreatedAtAttributes($value)
     {
         return date('Y-m-d H:i:s', strtotime($value));
     }

     public function getUpdatedAtAttributes($value)
     {
         return date('Y-m-d H:i:s', strtotime($value));
    }
}
