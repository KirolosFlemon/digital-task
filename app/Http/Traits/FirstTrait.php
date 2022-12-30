<?php
namespace App\Http\Traits;
use App\Providers\RouteServiceProvider;

trait FirstTrait
{
public function first($start_number,$end_number){
    $count = 0;

    // foreach (range($request->start_number, $request->end_number) as $num) {
    //     if (!in_array(5, str_split($num))) {
    //         $count++;
    //     }
    // }
    // return  ' Count = ' . $count;

    for ($i = $start_number; $i <= $end_number; $i++) {
        if ($i % 5 != 0) {
            $count += 1 ;
        }
    }
    return  ' Result = ' . $count;
}
}
