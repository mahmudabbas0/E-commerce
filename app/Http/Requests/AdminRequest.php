<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminRequest extends FormRequest
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
        $adminId = $this->route('admin');

        $rules = [
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', 'max:100', Rule::unique('admins', 'email')->ignore($adminId)],
            'status' => 'required|in:0,1',
            'role_id' => 'required|exists:roles,id',
        ];

        if ($this->isMethod('post')) {
            $rules['password'] = 'required|string|min:8';
        } else {
            $rules['password'] = 'nullable|string|min:8';
        }

        return $rules;
    }
}
