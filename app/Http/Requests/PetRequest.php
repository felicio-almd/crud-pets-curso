<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetRequest extends FormRequest
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
            'nome' => 'required|string|max:30',
            'foto' => 'required|image|mimes:jpeg,png,jpg',
            'especie' => 'required|string',
            'cor' => 'required|string',
            'raca' => 'nullable|string',
            'peso' => 'required|integer',
            'vacinado' => 'required|boolean'
        ];
    }
}
