<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class CustomMacros extends ServiceProvider
{
    public function boot()
    {        
        Form::macro('my_field', function(){
            return '<input type="awesome">';
        });
    //     HTML::macro('linkPhone', function($phone, $attributes = array(), $secure = null) {
    //     $number = Str::slug($phone, '');
    //     // Handle formatting
    //     switch (strlen($number)) {
    //         case 10:
    //             $phone  = '('.substr($number, 0, 3).') '.substr($number, 3, 3).'-'.substr($number, 6, 4);
    //             $number = '+1'.$number;
    //             break;
    //     }
    //   // Convert vanity numbers
    //   $number = str_ireplace(['A', 'B', 'C'], 2, $number);
    //   $number = str_ireplace(['D', 'E', 'F'], 3, $number);
    //   $number = str_ireplace(['G', 'H', 'I'], 4, $number);
    //   $number = str_ireplace(['J', 'K', 'L'], 5, $number);
    //   $number = str_ireplace(['M', 'N', 'O'], 6, $number);
    //   $number = str_ireplace(['P', 'Q', 'R', 'S'], 7, $number);
    //   $number = str_ireplace(['T', 'U', 'V'], 8, $number);
    //   $number = str_ireplace(['W', 'X', 'Y', 'Z'], 9, $number);
    //   return HTML::link("tel:{$number}", strtoupper($phone), $attributes, $secure);
    // });
    }
}
