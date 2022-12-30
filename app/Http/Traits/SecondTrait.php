<?php
namespace App\Http\Traits;
use App\Providers\RouteServiceProvider;

trait SecondTrait
{
public function second($words){
    $request = strtolower($words);
    $result = 0;
    for ($i = 0; $i < strlen($request); $i++) {
        $result *= 26;
        $result += ord($request[$i])  - 96;
    }
    return $result;
}
}
