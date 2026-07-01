<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {



        return [
            'site_name.*' => ['required', 'string', 'max:255'],
            'site_desc.*' => ['required', 'string', 'max:255'],
            'site_phone' => ['required', 'string', 'max:20'],
            'site_address.*' => ['required', 'string','max:255'],
            'site_email' => ['required', 'string', 'email', 'max:255'],
            'email_support' => ['required', 'string', 'max:255','email'],
            'logo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'favicon' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'meta_title.*' => ['nullable', 'string'],
            'meta_description.*' => ['required', 'string'],
            'meta_keywords.*' => ['required', 'string'],
            'maintenance_message.*' => ['nullable', 'string'],
            'maintenance_mode' => ['nullable', 'string'],
            'registration_status' => ['nullable', 'string'],
            'facebook_url' => ['required', 'string', 'max:255'],
            'twitter_url' => ['required', 'string', 'max:255'],
            'youtube_url' => ['required', 'string', 'max:255'],
            'instagram_url' => ['required', 'string', 'max:255'],
            'whatsapp_number' => ['nullable', 'string', 'max:20'],
            'primary_color' => ['nullable', 'string'],
            'secondary_color' => ['nullable', 'string'],
            'default_currency' => ['nullable', 'string'],
            'smtp_host' => ['nullable', 'string'],
            'smtp_port' => ['nullable', 'string'],
            'smtp_username' => ['nullable', 'string'],
            'smtp_password' => ['nullable', 'string'],
            'smtp_encryption' => ['nullable', 'string'],
            'site_copyright' => ['required', 'string'],
            'promotion_video_url' => ['required', 'url'],
        ];
    }
}
