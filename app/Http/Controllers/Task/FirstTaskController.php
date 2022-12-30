<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\FirstTaskRequest;
use App\Http\Traits\FirstTrait;

class FirstTaskController extends Controller
{
    use FirstTrait;
    public function first_task(FirstTaskRequest $request)
    {
        return $response = $this->first($request->start_number, $request->end_number);
    }
}
