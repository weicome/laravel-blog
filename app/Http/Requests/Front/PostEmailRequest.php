<?php
namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class PostEmailRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
        ];
    }
}
