<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;

class CheckCountries implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $countiresList = $response = Http::get('http://country.io/continent.json')->json();
       
        if(!isset($countiresList[strtoupper($value)])){
            $fail("The :attribute isn't valid.");
        }
    }
}
