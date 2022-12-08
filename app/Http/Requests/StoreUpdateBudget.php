<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateBudget extends FormRequest
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
            'budget_amount' => 'required|min:3|max:50',
            'seller_name'  => 'required|min:3|max:160',
            'client_name' => 'required|min:3|max:160',
            'description' => ['required', 'min:5', 'max:1000']
        ];
    }
}
