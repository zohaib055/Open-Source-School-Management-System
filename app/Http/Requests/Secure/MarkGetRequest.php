<?php

namespace App\Http\Requests\Secure;

use Efriandika\LaravelSettings\Facades\Settings;
use Illuminate\Foundation\Http\FormRequest;

class MarkGetRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'subject_id' => 'required|integer',
            'date' => 'required|date_format:"' . Settings::get('date_format') . '"',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}