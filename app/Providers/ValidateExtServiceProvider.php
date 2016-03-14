<?php
/**
 * Created by PhpStorm.
 * User: WojtylaB
 * Date: 2016-03-14
 * Time: 14:10
 */

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;


class ValidateExtServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Validator::extend('greater_than', function($attribute, $value, $parameters, $validator) {

            $data = $validator->getData();
            $value = $data['value'];
            $min_value = $parameters[0];

            return $value > $min_value;
        });

        Validator::replacer('greater_than', function($message, $attribute, $rule, $parameters) {
            $message = 'The value must be greater than '. $parameters[0];
            return str_replace(':field', $parameters[0], $message);
        });
    }

    public function register()
    {
        //
    }
}