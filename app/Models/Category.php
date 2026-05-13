<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Spatie\Translatable\HasTranslations;
use Cviebrock\EloquentSluggable\Sluggable;


class Category extends Model
{
    use Sluggable;

    protected $fillable = ['name', 'slug', 'parent', 'status'];


    use HasTranslations;

    public $translatable = ['name'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

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
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    public function scopeInactive($query)
    {
        return $query->where('status', 0);
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }

    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent');
    }
}
