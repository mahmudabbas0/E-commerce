<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasTranslations;

    protected $table = 'settings';

    protected $fillable = [
        'site_name',
        'site_desc',
        'site_phone',
        'site_address',
        'site_email',
        'email_support',
        'logo',
        'favicon',
        'facebook_url',
        'twitter_url',
        'youtube_url',
        'instagram_url',
        'whatsapp_number',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'maintenance_mode',
        'maintenance_message',
        'registration_status',
        'primary_color',
        'secondary_color',
        'default_currency',
        'smtp_host',
        'smtp_port',
        'smtp_username',
        'smtp_password',
        'smtp_encryption',
        'promotion_video_url',
        'site_copyright'
    ];

    protected $translatable = [
        'site_name',
        'site_address',
        'site_desc',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'maintenance_message'
    ];

    protected $casts = [
        'maintenance_mode'    => 'boolean',
        'registration_status' => 'boolean',
    ];

    public function getLogoAtAttribute()
    {
        return 'uploads/settings/' . $this->attributes['logo'];
    }

    public function getFaviconUrlAttribute()
    {
        return $this->attributes['favicon']
            ? asset('uploads/settings/' . $this->attributes['favicon'])
            : asset('assets/dashboard/images/ico/favicon.ico');
    }

    public function getLogoUrlAttribute()
    {
        return $this->attributes['logo']
            ? asset('uploads/settings/' . $this->attributes['logo'])
            : asset('assets/dashboard/images/logo/logo.png');
    }
}
