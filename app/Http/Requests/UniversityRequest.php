<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UniversityRequest extends FormRequest
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
        $id = $this->route("university");
        
        return [
            'name' => ['required','string','min:2'],
            'email'=> ['required','string', Rule::unique('universities')->ignore($id, 'id')],
            'description' => ['required','string','min:3'],
            'content' => ['required','string','min:4'],
            'link' => ['required','string','min:2'],
            'country' => ['required','string','min:2'],
            'user_id' => ['exists:users,id'],
            'photo' => ['required','image','mimes:png,jpg,jpeg,svg,gif'],
        ];
    }
}
