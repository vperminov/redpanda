<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MovementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'direction' => ['required', Rule::in(['direct', 'counter'])],
            'movement' => ['required', Rule::in(['U', 'D', 'R', 'L', 'F', 'B', 'M', 'E', 'S'])]
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'direction.required' => 'A direction is required',
            'direction.in' => 'Direction must be or "direct" or "counter"',
            'movement.required' => 'A movement is required',
            'movement.in' => 'Movement can be only "U", "D", "R", "L", "F", "B", "M", "E" or "S", according to official notation',
        ];
    }
}
