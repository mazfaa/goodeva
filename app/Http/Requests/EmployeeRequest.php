<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            // 'name' => ['required', 'string', 'min: 3'],
            // 'email' => ['required', 'unique:users'],
            // 'phone' => ['required', 'unique:users'],
            // 'password' => ['required'],
            // 'place_of_birth' => ['required'],
            // 'birth_date' => ['required'],
            // 'gender' => ['required'],
            // 'marital_status' => ['required'],
            // 'religion' => ['required'],
            // 'address' => ['required'],
            // 'province' => ['required'],
            // 'city' => ['required'],
            // 'join_date' => ['required'],
            // 'division' => ['required'],
            // 'profession' => ['required'],
            // 'job_level' => ['required'],
            // 'employment_status' => ['required'],
            // 'branch' => ['required'],
        ];
    }
}
