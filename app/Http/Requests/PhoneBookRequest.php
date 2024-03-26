<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Http;
use App\Rules\CheckCountries;
use App\Rules\CheckTimeZone;

class PhoneBookRequest extends FormRequest
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
            'first_name' => 'required',
            'phone_number' => 'required', // |unique:phone_book
            'country_code' => [new CheckCountries],
            'tz_name' => [new CheckTimeZone],
            'insertedOn' => 'required',
            'updatedOn' => 'required'
        ];
    }
}
