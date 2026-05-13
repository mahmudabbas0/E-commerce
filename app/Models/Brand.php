<?php

namespace App\Models;

use Cocur\Slugify\Slugify;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Cviebrock\EloquentSluggable\Sluggable;
use Spatie\Translatable\HasTranslations;

class Brand extends Model
{
    use HasTranslations, Sluggable;

    protected $fillable = ['name', 'logo', 'status', 'slug'];

    public $translatable = ['name'];

    public function getStatusTranslated()
    {
        if (Config::get('app.locale') === 'ar') {
            return $this->status == 1 ? 'مفعل' : 'غير مفعل';
        } else
            return $this->status == 1 ? 'Active' : 'Inactive';
    }
    public function getCreatedAtAttribute($value)
    {
        return date('Y-m-d', strtotime($value));
    }

    public function getLogoAttribute($logo)
    {
        return '/uploads/brands/' . $logo;
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'brand_id');
    }




}
