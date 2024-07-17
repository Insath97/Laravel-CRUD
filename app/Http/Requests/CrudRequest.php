<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrudRequest extends FormRequest
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
            'name' => ['required', 'max:200'],
            'image' => ['nullable', 'image', 'max:25000', 'mimes:jpeg,png,jpg,gif,svg'],
            'manufacturer' => ['required'],
            'clock_speed' => ['required'],
            'cores' => ['required', 'integer'],
            'threads' => ['required', 'integer'],
            'architecture' => ['required'],
            'release_date' => ['required', 'date'],
            'tdp' => ['required', 'integer', 'min:0'],
            'price' => ['required', 'numeric', 'min:0']
        ];
    }
}
