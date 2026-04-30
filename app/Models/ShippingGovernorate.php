<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingGovernorate extends Model
{
    protected $fillable = ['price', 'governorate_id'];

    public function governorate(){
        return $this->belongsTo(Governorate::class, 'governorate_id');
    }
}
