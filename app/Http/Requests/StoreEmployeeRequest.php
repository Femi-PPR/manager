<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreEmployeeRequest extends FormRequest
{

    private const TELE_REGEX = "/^((?:\+|00)[17](?: |-)?|(?:\+|00)[1-9]\d{0,2}(?: |-)?|(?:\+|00)1-\d{3}(?: |-)?)?(0\d|([0-9]{3})|[1-9]{0,3})(?:((?: |-)[0-9]{2}){4}|((?:[0-9]{2}){4})|((?: |-)[0-9]{3}(?: |-)[0-9]{4})|([0-9]{7}))$/";


    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // dd('nullable|regex:' . StoreEmployeeRequest::TELE_REGEX);
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'nullable|email',
            'telephone' => ['nullable', 'regex:' . StoreEmployeeRequest::TELE_REGEX],
            'company_id' => ['nullable', Rule::exists('companies', 'id')],
        ];
    }
}
