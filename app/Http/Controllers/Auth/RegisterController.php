<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{

    public function __invoke(RegisterRequest $request)
    {
        //Todo:: Will be change Clean Code
        $user = User::create($request->validated());

        $access_token_example = $user->createToken('degital')->accessToken;
        //return the access token we generated in the above step
        return response()->json(['token' => $access_token_example], 200);
    }
}
