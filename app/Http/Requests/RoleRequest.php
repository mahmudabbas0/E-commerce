<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'role.en' => 'required|string|unique:roles,role->en' . ($this->route('role') ? ',' . $this->route('role') : ''),
            'role.ar' => 'required|string|unique:roles,role->ar' . ($this->route('role') ? ',' . $this->route('role') : ''),
            'permissions' => 'required|array|min:1',
        ];
    }

    public function attributes(): array
    {
        return [
            'role.en' => __('dashboard.role-name') . ' (EN)',
            'role.ar' => __('dashboard.role-name') . ' (AR)',
            'permissions' => __('dashboard.permissions'),
        ];
    }
}
