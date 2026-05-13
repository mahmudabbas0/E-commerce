<?php

namespace App\Http\Requests;

use CodeZero\UniqueTranslation\UniqueTranslationRule;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        $id = $this->route('category');
        return [
            'name.*' => ['required', 'string', 'max:100', UniqueTranslationRule::for('categories')->ignore($id)],
            'slug' => 'string|unique:categories,slug,' . $id,
            'status' => 'required|in:0,1',
            'parent' => 'nullable|exists:categories,id',
        ];
    }

    public function messages(): array
    {
        return [
            'name.*.required' => __('validation.required'),
            'name.*.string' => __('validation.string'),
            'name.*.max' => __('validation.max.string'),
            'slug.unique' => __('validation.unique'),
            'status.required' => __('validation.required'),
            'parent.exists' => __('validation.exists'),
        ];
    }
}
