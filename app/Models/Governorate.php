<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Governorate extends Model
{
    use HasTranslations;
    public $translatable = ['name'];
    protected $fillable = ['name', 'country_id', 'is_active'];

    public $timestamps = false;

    public function country(){
        return $this->belongsTo(Country::class, 'country_id');
    }
    public function cities(){
        return $this->hasMany(City::class, 'governorate_id');
    }
    public function shippingCharge(){
        return $this->hasOne(ShippingGovernorate::class, 'governorate_id');
    }
}
