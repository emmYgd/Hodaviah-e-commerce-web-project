<?php

namespace App\Http\Controllers\Validators;

trait AdminLocationsAndTracksRequestRules {

    protected function updateLocationDetailsRules(): array
    {
        //set validation rules:
        $rules = [
            'token_id'=> 'required | string | exists:admins',/*size:10 |*/
            'unique_cart_id'=> 'required | string  | exists:carts',
            /*'cart_status'=> 'string',
            'current_country'=> 'required | string',
            'current_state'=> 'required | string',
            'current_city_or_town'=> 'string',
            'current_street'=> 'string',
            'shipped_date' =>'required',
            'expected_delivery_date'=> 'required | string',*/
        ];

        return $rules;
    }

    protected function fetchLocationDetailsRules(): array
    {
        //set validation rules:
        $rules = [
            'token_id'=> 'required | string | exists:admins',//| size:10 
            'unique_cart_id'=> 'required | string | exists:carts',
        ];

        return $rules;
    }
}