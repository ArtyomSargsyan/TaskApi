<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;

class CheckTimeZone implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $timeZoneList = Http::get('http://worldtimeapi.org/api/timezone')->json();
   
        if(!isset($timeZoneList[strtoupper($value)])){
            $fail("The :attribute isn't valid.");
        }
    }
}
