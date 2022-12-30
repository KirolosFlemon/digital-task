<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\SecondTaskRequest;
use App\Http\Traits\SecondTrait;

class SecondTaskController extends Controller
{
    use SecondTrait;
    public function second_task(SecondTaskRequest $request)
    {
        return $response = $this->second($request->words);
    }
}
