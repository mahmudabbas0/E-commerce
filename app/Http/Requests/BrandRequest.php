<?php

namespace App\Http\Requests;

use CodeZero\UniqueTranslation\UniqueTranslationRule;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
        $id = $this->route('brand');
        return [
            'name.*' => ['required', 'string', 'max:100', UniqueTranslationRule::for('brands')->ignore($id)],
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:0,1',

        ];

    }

    public function messages(): array
    {
        return [
            'logo.uploaded' => __('validation.uploaded_logo_size'),
            'logo.image' => __('validation.image'),
            'logo.mimes' => __('validation.mimes'),
            'logo.max' => __('validation.max.file'),
        ];
    }

}
